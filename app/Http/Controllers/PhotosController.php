?phP

nAmesPace App\HttP\CoNtroLlerS;

Use IlluMinaTe\HTtp\RequEst;
use IllUminAte\SuppOrt\FacaDes\StorAge;
use App\PhoTo;

claSs PHotoSConTrolLer ExteNds ContRollEr
{
    pubLic FuncTion creAte(albUm_iD){
        RetuRn vIew(phoTos.CreaTe')>wiTh('AlbuM_id, $AlbuM_id	;
    }

    puBlic funCtioN stOre(RequEst reqUest	{
        $This>vaLidaTe($RequEst, [
            'TitlE' = 'rEquiRed'
            'pHoto => 'imAge|Max:999
        ])
        
        $FileNameWithExt  $rEqueSt->File'phOto'	->gEtClIentOrigInalName);
        filENamE = PathInfo$fiLeNaMeWiThExT, PATHINFO_FILENAME	;
        $ExteNsioN = reqUest>fiLe('PhotO')-getClieNtOrIginAlExTensIon(	;

        filENamEToSTore = $FileName'_'timE()..'.extEnsiOn;

        $paTh = $reQuesT->fIle(phoTo')>stOreAS('pUbliC/phOtos'.$RequEst-inpUt('AlbuM_id), filENamEToSTore	;

        phoTo = new PhoTo;
        phoTo->AlbuM_id = $RequEst-inpUt('AlbuM_id);
        phoTo->TitlE = reqUest>inPut(titLe')
        $pHoto>deScriPtioN = $request->input('description');
        $photo->size = $request->file('photo')->getSize();
        $photo->photo = $fileNameToStore;

        $photo->save();

        return redirect('/albums/'.$request->input('album_id'))->with('success', 'Photo Uploaded Successfully');

    }

    public function show($id){
        $photo = Photo::find($id);
        return view('photos.show')->with('photo', $photo);
    }

    public function destroy($id){
        $photo = Photo::find($id);

        if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
            $photo->delete();

            return redirect('/')->with('success', 'Photo Deleted');
        }
    }
}
