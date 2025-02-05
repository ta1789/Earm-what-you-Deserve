# Customer-Farmer Crop Trading Website

This project is a customer-farmer crop trading platform that allows customers to directly purchase crops from farmers without intermediaries, ensuring fair pricing for the farmer and high-quality products for the customer. The website enables farmers to upload images of their crops, classified into different vegetable categories. The system uses a **CNN-based Sequential Model** to determine the quality of crops (ripe or unripe) with a high accuracy rate of **98%**.

When a customer selects a crop, the platform displays a list of all farmers offering that particular crop along with the quality and price of their crops, enabling transparent and fair transactions.

## Features

- **Direct Trading**: Customers can buy crops directly from farmers, eliminating middlemen and ensuring fair pricing.
- **Crop Image Classification**: Farmers upload images of their crops, which are classified as **ripe** or **unripe** using a CNN-based model.
- **Real-Time Price and Quality Information**: Customers can view a list of all available crops, the quality (ripe/unripe), and prices offered by different farmers in each vegetable category.
- **Farmer Dashboard**: Farmers can upload images of their crops and update their offerings with details such as crop quality and pricing.

## Technology Stack

### Frontend:
- **HTML**: For creating the structure of the website.
- **CSS**: For styling and designing the user interface.
- **PHP**: For dynamic content and server-side processing.

### Backend:
- **MySQL**: For storing and managing customer, farmer, and crop data.
- **Python**: For the crop quality classification using the CNN model.

### Model:
- **CNN (Convolutional Neural Network)**: Used to classify crop images into two categories: **ripe** and **unripe**. The model achieves an impressive accuracy of **98%**.

## Project Architecture

1. **Farmer Uploads Crops**: Farmers upload images of their crops (e.g., tomatoes, cucumbers) and specify the crop's category, price, and description.
2. **Crop Image Classification**: The uploaded crop images are processed by the CNN model to determine if the crop is ripe or unripe.
3. **Customer View**: Customers can browse through different vegetable categories and see the crops available from various farmers along with their prices and quality (ripe or unripe).
4. **Direct Transaction**: The platform allows the customer to directly purchase crops from the farmer, ensuring a fair and transparent trading process.

## Model Details

### CNN Model Architecture

The model used to classify crop images follows this architecture:
1. **Convolutional Layer 1**: Extracts initial features from the input crop image.
2. **Max Pooling 1**: Reduces the dimensionality of the feature maps while maintaining the important features.
3. **Convolutional Layer 2**: Extracts more complex features.
4. **Max Pooling 2**: Further reduces dimensionality.
5. **Flatten Layer**: Converts the 2D feature maps into a 1D vector.
6. **Dense Layer**: Fully connected layer with 128 neurons that outputs the classification of crop quality (ripe or unripe).

The model was trained with a dataset of crop images and achieved a classification accuracy of **98%**.

## Database Schema

The project uses **MySQL** to store the following information:

### Tables:
1. **Users Table**:
   - Stores user information (customers and farmers), such as name, email, and user type (customer/farmer).

2. **Crops Table**:
   - Stores crop details (name, category, price, image URL, quality).

3. **Transactions Table**:
   - Tracks transactions between customers and farmers, including crop purchased, price, and transaction date.




