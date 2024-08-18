import pandas as pd
import joblib
import sys

# Ensure command line arguments are provided
if len(sys.argv) < 2:
    print("Usage: python predict.py <path_to_csv>")
    sys.exit(1)

# Load the model
try:
    model_sales = joblib.load('model_sales.pkl')
    print("Model loaded successfully.")
except Exception as e:
    print(f"Error loading model: {e}")
    sys.exit(1)

# Load the dataset from the provided CSV file
csv_file = sys.argv[1]
try:
    df = pd.read_csv(csv_file)
    print("CSV file loaded successfully.")
except Exception as e:
    print(f"Error loading CSV file: {e}")
    sys.exit(1)

# Perform the same preprocessing as done during training
rename_columns = {
    'PRODUCTLINE_Motorcycles': 'PRODUCTLINE_Nike',
    'PRODUCTLINE_Planes': 'PRODUCTLINE_rainwear',
    'PRODUCTLINE_Ships': 'PRODUCTLINE_shorts',
    'PRODUCTLINE_Trains': 'PRODUCTLINE_Sports cloths',
    'PRODUCTLINE_Trucks and Buses': 'PRODUCTLINE_trouser',
    'PRODUCTLINE_Vintage Cars': 'PRODUCTLINE_Tshirts'
}

df['SALES_PER_ORDER'] = df['SALES'] / df['QUANTITYORDERED']
df = pd.get_dummies(df, columns=['PRODUCTLINE', 'COUNTRY', 'DEALSIZE'], drop_first=True)
df.rename(columns=rename_columns, inplace=True)

# Add a new column for Underwares (with default value)
df['PRODUCTLINE_Underwares'] = 0

# Align the dataset with the model's expected input features
expected_columns = model_sales.feature_names_in_
df = df.reindex(columns=expected_columns, fill_value=0)
print("Data aligned with model features.")

# Predict next year's sales
next_year = df['YEAR_ID'].max() + 1
df_next_year = df.copy()
df_next_year['YEAR_ID'] = next_year
df_next_year['PREDICTED_SALES'] = model_sales.predict(df_next_year)
print(f"Predictions generated for the year {next_year}.")

# Save predictions to a CSV file
output_file = 'predicted_sales_next_year.csv'
df_next_year.to_csv(output_file, index=False)
print(f"Predictions saved to {output_file}")