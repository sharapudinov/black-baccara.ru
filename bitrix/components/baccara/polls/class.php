<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * Class CasBetsTournament
 *
 * @description Компонент "Турнир"
 */
class CasBetsTournament extends CBitrixComponent
{  
    public $actions_name = array('activate_coupon', 'forecasts_submit');
    
    public function onPrepareComponentParams($params)
    {
        if(!\Bitrix\Main\Loader::includeModule('polls.user')) {
            die('Неизвестная ошибка.');
        }     
              
        $this->ob = new Polls\User\UserTable();        
    }

    public function executeComponent()
    {

		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_action'])) {

        //    echo '<pre>'; print_r($_POST); echo '</pre>';

            $this->doAction($_POST['submit_action'], $_POST);
            
        }
        else {
            
        }

        $this->getActionForTemplate();
        
        $this->arResult['TOURNAMENTS'] = $this->getTournamentsList($this->arResult['TOURNAMENT']['STATUS']);
        
        $this->IncludeComponentTemplate();        
    }

    /**
     * function getActionForDB
     *
     * @description Получает информацию о том какое действие нужно совершить в случае POST запроса и совершает его.
     */

    public function doAction($action, $data) {
    
    }
}