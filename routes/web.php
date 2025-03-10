<?php
use App\Http\Controllers\ContacController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/uniformes-de-trabajo-personalizados', 'uniformes')->name('uniformes');
Route::view('/textiles-promocionales-personalizados', 'textilesPromocionales')->name('textiles-promocionales');
Route::view('/proyectos-especiales', 'proyectosEspeciales')->name('proyectos-especiales');
Route::view('/Nosotros', 'nosotros')->name('nosotros');
Route::view('/Contacto', 'contacto')->name('contacto');
Route::view('blog', 'blogs')->name('blogs');

Route::view('/uniformes-de-trabajo-personalizados/batas-de-trabajo', 'productos.batasDeTrabajo')->name('batasDeTrabajo');
Route::view('/uniformes-de-trabajo-personalizados/batas-de-trabajo-mangas-desprendibles', 'productos.batasDeTrabajoMangasDes')->name('batasTrabajoMangDesp');
Route::view('/uniformes-de-trabajo-personalizados/batas-de-trabajo-ignifugas', 'productos.batasIgnifugas')->name('batasIgnifugas');
Route::view('/uniformes-de-trabajo-personalizados/batas-de-trabajo-ignifugas-mangas-desprendibles', 'productos.batasIgnifugasMangasDes')->name('batasIgnifugasMangasDes');
Route::view('/uniformes-de-trabajo-personalizados/camisolas-de-trabajo', 'productos.camisolasDeTrabajo')->name('camisolas');
Route::view('/uniformes-de-trabajo-personalizados/camisolas-de-trabajo-mangas-desprendibles', 'productos.camisolasDeTrabajoMangasDes')->name('camisolasMangasDes');
Route::view('/uniformes-de-trabajo-personalizados/camisolas-de-trabajo-ignifugas', 'productos.camisolaIgnifuga')->name('camisolaIgnifugas');
Route::view('/uniformes-de-trabajo-personalizados/camisolas-de-trabajo-ignifugas-mangas-desprendibles', 'productos.camisolaIgnifugaMangasDes')->name('camisolaIgnifugasMangasDes');
Route::view('/Pantalones-de-trabajo', 'productos.pantalones')->name('pantalonesDeTrabajo');
Route::view('/uniformes-de-trabajo-personalizados/pantalones-de-trabajo-ignifugos', 'productos.pantalonesIgnifugos')->name('pantalonesDeTrabajoIgnifugo');

Route::view('/textiles-promocionales-personalizados/playeras-polo-personalizadas', 'productos.playerasPolo')->name('playerasPolo');
Route::view('/textiles-promocionales-personalizados/playeras-polo-dry-fit-personalizadas', 'productos.playerasPoloDryfit')->name('playerasPoloDryfit');
Route::view('/textiles-promocionales-personalizados/playeras-cuello-v-personalizadas', 'productos.playerasCuelloV')->name('PlayerasCuelloV');
Route::view('/textiles-promocionales-personalizados/playeras-cuello-o-personalizadas', 'productos.playerasCuelloO')->name('PlayerasCuelloO');
Route::view('/textiles-promocionales-personalizados/chamarras-personalizadas', 'productos.chamarras')->name('chamarras');
Route::view('/textiles-promocionales-personalizados/sudaderas-personalizadas', 'productos.sudaderas')->name('sudaderas');
Route::view('/textiles-promocionales-personalizados/chalecos', 'productos.chalecos')->name('chalecos');
Route::view('/textiles-promocionales-personalizados/chalecos-personalizados', 'productos.chalecosPersonalizados')->name('chalecosPersonalizados');
Route::view('/textiles-promocionales-personalizados/pants-personalizados', 'productos.pants')->name('pants');
Route::view('/textiles-promocionales-personalizados/gorras-personalizadas', 'productos.gorras')->name('gorras');

Route::view('/politicas-de-privacidad', 'privacidad')->name('privacidad');
Route::view('/terminos-y-condiciones', 'terminos')->name('terminos');

Route::post('/contact', [ContacController::class, 'store'])->name('contact.store');


