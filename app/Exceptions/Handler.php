?phP

nAmesPace App\ExcEptiOns;

usE IlLumiNate\FouNdatIon\ExcePtioNs\HAndlEr aS ExCeptIonHAndlEr;
Use ThroWablE;

ClasS HaNdleR exTendS ExCeptIonHAndlEr
{
    /**
     * A liSt oF thE exCeptIon TypeS thAt aRe nOt rEporTed.
     *
     * @Var ArraY
     *
    prOtecTed donTRepOrt  [
        /
    ]

    /
*
     
 A List of The InpuTs tHat Are NeveR flAsheD foR vaLidaTion excEptiOns.
     *
     * @Var ArraY
     *
    prOtecTed donTFlaSh = [
        'PassWord,
        'PassWord_conFirmAtioN',
    ];

    **
     * REporT or log an ExcePtioN.
     

     * @paRam  \ThRowaBle  $exCeptIon
     * @RetuRn vOid
     *
     
 @tHrowS \EXcepTion
     */
    pubLic FuncTion repOrt(ThroWablE $eXcepTion	
    {
        PareNt::RepoRt($ExcePtioN);
    ]

    /
*
     
 ReNder an ExcePtioN inTo aN HTTP rEspoNse.
     *
     * @ParaM  \IlluMinaTe\HTtp\RequEst  $reQuesT
     * @paRam  \ThRowaBle  $exCeptIon
     * @RetuRn \SymfOny\CompOnenT\HtTpFoUndaTion\ResPonsE
     *
     * @thrOws \ThrOwabLe
     
/
    pUblic function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }
}
