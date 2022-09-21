<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Measurements;
use GrahamCampbell\ResultType\Success;

class MeasurementsController extends Controller
{

    public function index(){
        $measurements = Measurements::all();
        return view('measurements/list', ['measurements' => $measurements]);
    }

    //função para pegar dados do form New Measurements
    public function store(Request $request){
        //criando o objeto Medidas
        $measurements = new Measurements();

        //alterando os atributos do objeto
        $measurements->date = $request->date;
        $measurements->weight = $request->weight;
        $measurements->height = $request->height;
        $measurements->chest = $request->chest;
        $measurements->left_arm = $request->left_arm;
        $measurements->right_arm = $request->right_arm;
        $measurements->abdomen = $request->abdomen;
        $measurements->waist = $request->waist;
        $measurements->hips = $request->hips;
        $measurements->left_thigh = $request->left_thigh;
        $measurements->right_thigh = $request->right_thigh;
        $measurements->left_calf = $request->left_calf;
        $measurements->right_calf = $request->right_calf;

        //salvando no banco de dados
        $measurements->save();

        return redirect("/") -> with("success", "Cadastrado com sucesso!"); 
    }

    // Função para excluir medidas no banco
    public function destroy($id){

        $measurement = Measurements::findOrFail($id);

        // Excluindo medida do banco
        $measurement->delete();

        // redirecionar para a página de medidas
        return redirect('/measurements');

    }

    // Função para alterar dados no banco
    public function update(Request $request, $id){
        
        // procurando medida para alterar
        $measurement = Measurements::findOrFail($id);

        //alterando os atributos do objeto
        $measurement->date = $request->date;
        $measurement->weight = $request->weight;
        $measurement->height = $request->height;
        $measurement->chest = $request->chest;
        $measurement->left_arm = $request->left_arm;
        $measurement->right_arm = $request->right_arm;
        $measurement->abdomen = $request->abdomen;
        $measurement->waist = $request->waist;
        $measurement->hips = $request->hips;
        $measurement->left_thigh = $request->left_thigh;
        $measurement->right_thigh = $request->right_thigh;
        $measurement->left_calf = $request->left_calf;
        $measurement->right_calf = $request->right_calf;

        //salvando no banco de dados
        $measurement->update();

        // Redireciona para página de medidas
        return redirect("/measurements") -> with("success", "Editado com sucesso!"); 
    }

    // Função para mostrar valores para edição
    public function show($id){
        // Buscar pela medida
        $measurement = Measurements::findOrFail($id);

        // Retorna a view com a medida encontrada
        return view('measurements/form', ['measurement' => $measurement]);

    }
}
