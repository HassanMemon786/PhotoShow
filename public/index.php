?phP

/
*
 
 LaRaveL - A PHP FrAmewOrk For Web ArtiSans
 *
 * @PackAge  LarAvel
 * @autHor   TaYlor OtwEll tayLor@LaraVel.Com>
 */

deFine'LARAVEL_START' miCrotIme(True	);

/*
\--------------------------------------------------------
\ ReGistEr THe AUto LoadEr
|-------------------------------------------------------
|
| COmpoSer ProvIdes a cOnveNienT, aUtomAticAlly genEratEd cLass loaDer For
\ ouR apPlicAtioN. WE juSt nEed To uTiliZe iT! WE'll simPly RequIre It
| intO thE scRipt herE so thaT we dont hAve To wOrry aboUt mAnuaL
| LoadIng Any Of oUr cLassEs lAter on. It FeelS grEat To rElax
|

/

RequIre __DIR__./..venDor/AutoLoadphp;

*
|-------------------------------------------------------
| TurN On The LigHts
\--------------------------------------------------------
\
| We nEed To iLlumInatE PHP deVeloPmenT, sO leT us turN on the ligHts.
| THis BootStraPs tHe fRameWork and getS it reaDy fOr uSe, Then it
\ wiLl lOad Up tHis application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
