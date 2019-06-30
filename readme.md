## You gonna need composer --php dependency manager--
https://getcomposer.org

PD: En el root tire una copia de un miniDB para que te importes a mySQL porque no hice los DB::fakers/factories todavia.

#Steps:
1-Clone repo-

2-cd into directory.

3-run 'composer install'.

4-generar .env con el 'env.example' (duplicate and change name) , solo vas a necesitar DB name y pass.

5-run 'php artisan key:generate', o 'php artisan k:g'.

6-Levantar el server con 'php artisan ser'.



#Provider Section in:
http://localhost:8000/
users:{
  osdeUser@osde.com
  galenoUser@galeno.com
  pass:123123123
  };
#Admin Section in:
http://localhost:8000/admin
admin:{
  rossi@rossi.com
  pass:123123123
  };



#Working.
Users:{
  On Log-In, liquidations list, if bigger than 5 items it will paginate.
}
Admin:{
  1,On Log-In, Providers list, if bigger than 5 items it will paginate.
  2,Can select Provider and see its data.
}
