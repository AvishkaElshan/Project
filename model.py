import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import mean_absolute_error
import joblib

# Load the dataset
df = pd.read_csv('sales_data_sample.csv')

# Handle missing values
df.dropna(inplace=True)

# Feature engineering: sales per order
df['SALES_PER_ORDER'] = df['SALES'] / df['QUANTITYORDERED']

# Rename product line columns as specified
rename_columns = {
    'PRODUCTLINE_Motorcycles': 'PRODUCTLINE_Nike',
    'PRODUCTLINE_Planes': 'PRODUCTLINE_rainwear',
    'PRODUCTLINE_Ships': 'PRODUCTLINE_shorts',
    'PRODUCTLINE_Trains': 'PRODUCTLINE_Sports cloths',
    'PRODUCTLINE_Trucks and Buses': 'PRODUCTLINE_trouser',
    'PRODUCTLINE_Vintage Cars': 'PRODUCTLINE_Tshirts'
}

df = pd.get_dummies(df, columns=['PRODUCTLINE', 'COUNTRY', 'DEALSIZE'], drop_first=True)
df.rename(columns=rename_columns, inplace=True)

# Add a new column for Underwares (with default value)
df['PRODUCTLINE_Underwares'] = 0

# Target variable
y_sales = df['SALES']

# Feature set
X = df.drop(columns=['SALES'])

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y_sales, test_size=0.2, random_state=42)

# Train the model
model_sales = RandomForestRegressor(n_estimators=100, random_state=42)
model_sales.fit(X_train, y_train)

# Evaluate the model
y_pred = model_sales.predict(X_test)
print('MAE for Sales:', mean_absolute_error(y_test, y_pred))

# Save the model
joblib.dump(model_sales, 'model_sales.pkl')