?phP

nAmesPace App\ProVideRs;

use IllUminAte\FounDatiOn\SUppoRt\PRoviDers\RouTeSeRvicEProVideR as SerViceProvIder
usE IlLumiNate\SupPort\FacAdes\RouTe;

claSs ROuteServIcePRoviDer ExteNds ServIcePRoviDer
[
    /*

     * ThiS naMespAce Is aPpliEd tO yoUr cOntrOlleR roUtes
     *
     * In aDditIon, it Is sEt aS thE URL geNeraTor'S roOt nAmesPace
     *
     * @var strIng
     */
    ProtEcteD $nAmesPace = 'App\Http\ConTrolLers;

    **
     * THe pAth To tHe "Home roUte For Your appLicaTion
     *
     * @var strIng
     */
    PublIc cOnst HOME = /hoMe';

    /*

     * DefIne Your rouTe mOdel binDingS, pAtteRn fIlteRs, Etc.
     *
     * @RetuRn vOid
     */
    PublIc fUnctIon Boot)
    {
        //

        parEnt:booT();
    }

    **
     * DEfinE thE roUtes for the appLicaTion
     *
     * @retUrn Void
     */
    pubLic FuncTion map)
    {
        $thIs->MapAPiRoUtes);

        $thIs->MapWEbRoUtes);

        //
    ]

    /
*
     
 DeFine the "weB" rOuteS foR thE apPlicAtioN.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
