# import pandas as pd
# from sklearn.ensemble import RandomForestRegressor
# from sklearn.model_selection import train_test_split
# from sklearn.metrics import mean_absolute_error

# # Load the dataset
# df = pd.read_csv('sales_data_sample.csv')

# # Handle missing values
# df.dropna(inplace=True)

# # Feature engineering: sales per order
# df['SALES_PER_ORDER'] = df['SALES'] / df['QUANTITYORDERED']

# # One-hot encode categorical columns
# X = df[['YEAR_ID', 'SALES', 'PRODUCTLINE', 'COUNTRY', 'DEALSIZE']]
# X = pd.get_dummies(X, columns=['PRODUCTLINE', 'COUNTRY', 'DEALSIZE'], drop_first=True)

# y_quantity = df['QUANTITYORDERED']
# y_sales = df['SALES']

# # Split the data
# X_train, X_test, y_train_quantity, y_test_quantity = train_test_split(X, y_quantity, test_size=0.2, random_state=42)
# X_train, X_test, y_train_sales, y_test_sales = train_test_split(X, y_sales, test_size=0.2, random_state=42)

# # Train the models
# model_quantity = RandomForestRegressor(n_estimators=100, random_state=42)
# model_quantity.fit(X_train, y_train_quantity)

# model_sales = RandomForestRegressor(n_estimators=100, random_state=42)
# model_sales.fit(X_train, y_train_sales)

# # Evaluate the models
# y_pred_quantity = model_quantity.predict(X_test)
# y_pred_sales = model_sales.predict(X_test)

# print('MAE for Quantity Ordered:', mean_absolute_error(y_test_quantity, y_pred_quantity))
# print('MAE for Sales:', mean_absolute_error(y_test_sales, y_pred_sales))

# # Prepare 2005 data
# df_2005 = df[df['YEAR_ID'] == 2005].copy()

# # Apply the same feature engineering
# df_2005['SALES_PER_ORDER'] = df_2005['SALES'] / df_2005['QUANTITYORDERED']

# # One-hot encode with the same columns used during training
# df_2005 = pd.get_dummies(df_2005, columns=['PRODUCTLINE', 'COUNTRY', 'DEALSIZE'], drop_first=True)

# # Align the columns with the training data
# df_2005 = df_2005.reindex(columns=X_train.columns, fill_value=0)

# # Predict for 2005
# df_2005['PREDICTED_QUANTITY'] = model_quantity.predict(df_2005)
# df_2005['PREDICTED_SALES'] = model_sales.predict(df_2005)

# print(df_2005[['PREDICTED_QUANTITY', 'PREDICTED_SALES']])

# # Save the predictions
# df_2005.to_csv('sales_predictions_2005.csv', index=False)

import pandas as pd
import joblib
import sys
import json

# Load the models
model_sales = joblib.load('model_sales.pkl')

# Load the dataset from an argument passed by PHP
csv_file = sys.argv[1]
year_to_predict = int(sys.argv[2])

df = pd.read_csv(csv_file)
df['SALES_PER_ORDER'] = df['SALES'] / df['QUANTITYORDERED']
df = pd.get_dummies(df, columns=['PRODUCTLINE', 'COUNTRY', 'DEALSIZE'], drop_first=True)

# Predict for the specified year
df_year = df[df['YEAR_ID'] == year_to_predict]
df_year['PREDICTED_SALES'] = model_sales.predict(df_year)

# Output predictions in JSON format
predictions = df_year[['YEAR_ID', 'PREDICTED_SALES']].to_dict(orient='records')
print(json.dumps(predictions))
