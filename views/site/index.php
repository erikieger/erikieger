<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Revenda Mais';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Teste Revenda Mais!</h1>
    </div>

    <div class="body-content">
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'cep')->textInput(['autofocus' => true]) ?>
            </div>

            <div class="col-md-6">
                <?= $form->field($model, 'logradouro') ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <div class="row">            
        <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Endereços Database</h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ENDERECO</th>                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach($dados as $key => $value){
                                    $number = $key+1;
                                    echo "<tr>
                                    <td>$number</td>
                                    <td>".$value['cep']."</td>  
                                    <td>".$value['logradouro']."</td>                                    
                                </tr>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Endereços API</h4>

                        <div class="table-responsive">
                            <div class="enderecos-api">
                                <?php echo $dadosAPI; ?>
                            </div>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
        </div>
    </div>
    
</div>
