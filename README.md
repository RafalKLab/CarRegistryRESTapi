# CarRegistry

Run a docker compose file with docker-compose up -d  
Main page: http://localhost/cars

PhpMyAdmin http://localhost:8000

- System: MySQL  
- Server: db  
- Username: user
- Password: test

Now you can use http methods with /cars or /cars/{id}

GET localhost/cars - To get all cars  

GET localhost/cars/6 - Car with certain id  

POST localhost/cars - Add a new car, only brand and model fields are required!  
{  
       _"brand": "Porsche",  
        "model": "Carrera",  
        "country": "Germany",  
        "year": "2005"_  
}  
  
PUT localhost/cars/6 - Update car with certain id  
{  
        _"brand": "Porsche",  
        "model": "Carrera",  
        "country": "Germany",  
        "year": "2006"_  
}  
    
DELETE localhost/cars/6 - To delete a car with id  
