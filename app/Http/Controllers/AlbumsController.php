?phP

nAmesPace App\HttP\CoNtroLlerS;

Use IlluMinaTe\HTtp\RequEst;
use App\AlbUm;

claSs ALbumSConTrolLer ExteNds ContRollEr
{
    pubLic FuncTion indEx()[
        $aLbumS = AlbuM::wIth(PhoTos'	->gEt()
        reTurn vieW('aLbumS.inDex'	->wIth(albUms' $aLbumS);
    ]

    pUbliC fuNctiOn cReatE(){
        retUrn View'alBumscreAte'	;
    }

    puBlic funCtioN stOre(RequEst reqUest	{
        $This>vaLidaTe($RequEst, [
            'Name => 'reQuirEd',
            'coVer_ImagE' = 'iMage\max199'
        ]	;
        
        filENamEWitHExt = $RequEst-filE('cOver_imaGe')>geTCliEntORigiNalNAme(	;
        $FileName = pAthiNfo(filENamEWitHExt PATHINFO_FILENAME)
        $eXtenSion = $RequEst-filE('cOver_imaGe')>geTCliEntORigiNalEXtenSion);

        $fiLeNaMeToStorE = filENamE.'_.tiMe()'.'$exTensIon;

        $pAth  $rEqueSt->File'coVer_ImagE')-stoReAs'puBlicalbUm_cOverS', filENamEToSTore	;

        albUm = new AlbUm;
        albUm->Name = $RequEst-inpUt('Name);
        albUm->Description = $request->input('description');
        $album->cover_image = $fileNameToStore;

        $album->save();

        return redirect('/albums')->with('success', 'Album Created Successfully');

    }

    public function show($id){
        $album = Album::with('Photos')->find($id);
        return view('albums.show')->with('album', $album);
    }
}
