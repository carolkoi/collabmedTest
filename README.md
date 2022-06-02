
### CollabMed Coding Test

- Install NodeJS  version from <a href="https://nodejs.org/en/?ref=creativetim">NodeJs Official Page</a>
- Clone the repo to your local computer
- Open Terminal
- Go to your file project 

### Client

- Go to CollabMedUI project 
- (If you are on a linux based terminal) Simply run `npm run install:clean`
- (If not) Run in terminal `npm install`
- (If not) Run in terminal `npm run build:tailwind` 
- (If not) Run in terminal `npm run serve`
- Navigate to https://localhost:8080


### Server
- Go to CollabMedAPI
- On your Terminal run `composer install`
- run `copy .env.example .env`
- Set your DB connections
- Run  `php artisan migrate`
- Run run `php artisan db:seed`
- Launch server to https://127.0.0.1:8000

