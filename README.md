# CarRegistry

Run a docker compose file with docker-compose up -d  
Main page: http://localhost/cars
PhpMyAdmin http://localhost:8000

PhpMyAdmin is on port 8000 
- System: MySQL  
- Server: db  
- Username: user
- Password: test

Now you can use http methods with /cars or /cars/{id}

GET /cars - All cars  
GET /cars/{id} - Car with certain id  
  
POST /cars - Insert new car, provide form-data "brand" and "model"  
  
PUT /cars/{id} - Update car with json  
PUT /{id} Example  
{  
    "brand": "Car brand",  
    "model": "Car model"  
}  
  
DELETE /cars/{id} - To delete a car with id  
