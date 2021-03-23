# CarRegistry

**In WWW directory create a .htaccess file with such code:**  
  RewriteEngine On  
  RewriteCond %{REQUEST_FILENAME} !-f  
  RewriteRule ^(.+)$ index.php?q=$1 [L,QSA]  

Run a docker compose file with docker-compose up -d  
Service will be launched on a localhost  
localhost:80  

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
