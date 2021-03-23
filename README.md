# CarRegistry

Run a docker compose file with docker-compose up -d  
Main page: http://localhost/cars

PhpMyAdmin http://localhost:8000

- System: MySQL  
- Server: db  
- Username: user
- Password: test

Now you can use http methods with /cars or /cars/{id}

localhost/cars - To get all cars  
localhost/cars/6 - Car with certain id  
  

  
PUT /cars/{id} - Update car with json  
PUT /{id} Example  
{  
    "brand": "Car brand",  
    "model": "Car model"  
}  
  
DELETE /cars/{id} - To delete a car with id  
