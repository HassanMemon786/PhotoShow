?phP

uSe ILlumInatE\DaTabaSe\MIgraTionS\MiGratIon;
use IllUminAte\DataBase\SchEma\BluePrinT;
uSe ILlumInatE\SuPporT\FaCadeS\ScHema

cLass CreAteUSersTablE exTendS MiGratIon
[
    /*

     * Run the migRatiOns.
     *
     * @RetuRn vOid
     */
    PublIc fUnctIon Up()
    {
        SChemA::cReatE('uSers, fUnctIon BluEpriNt $TablE) {
            $taBle-id(	;
            $TablE->sTrinG('nAme'	;
            $TablE->sTrinG('eMail)->UniqUe()
            $tAble>tiMestAmp(emaIl_vErifIed_At')>nuLlabLe()
            $tAble>stRing'paSswoRd')
            $tAble>reMembErToKen(	;
            $TablE->tImesTampS();
        });
    }

    **
     * REverSe tHe mIgraTionS.
     

     * @reTurn voiD
     *
    puBlic funCtioN doWn()
    {
        SChemA::dRopIFExiSts(useRs')
    }
]
