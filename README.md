# laravel-mail(for fun/learning purposes)
Simply seed to send a mail to users, well complicate it on your end

## Install Application
Follow the same installation procedure as with any laravel project

- git clone 
- composer install
- cp .env.example .env
- php artisan key:generate
- Uses sqlite so no need setting up sql credentials
- Instead run Linux command: touch database/database.sqlite
- Set up mailtrap mail_username and mail_password(get credentials from [mailtrap](mailtrap.io)
- Basically the boring bits are now done
- Ooops, remember to migrate to get the tables
- If setup correctly run php artisan db:seed and check mailtrap for an email
- Simplest way to get your email to work

## Explanation
The app sets up a simple database with tables users, products and a pivot table(db normalization since a user can have multiple products and a product can be owned by many users) I mean, imagine a simple eccomerce site

Next in the models, the user sets up 2 laravel user and product model and an extra ProductUser pivot model, not that it is necessary (plenty of ways you can do this but in my case, this is completely necessary

The ProductUser pivot model has a method boot that is used to check for eloquent events in my case working with creating and created which means when a new record is being added or has been added

While adding a new record, I would want to create a 16 bit string to represent my invoice id, You know, I need to send an invoice id to the user getting the product and save it along with other fields in the db

After adding a new record, I would want to notify user of the new product he has decided to purchase, hence the use of the created boot static method which sends the mail to the user holding the fields of the invoice.

See how simple it can be, zero routes, zero controllers, zero views, I mean, just the one that has the mail markdown that is completely necessary if you love styling, and you might still decide to send the mail directly from the InvoiceMade notifications class without the view and probably the few views that might have shipped in with php artisan:make auth

Its simple, always been simple...
















