<?php

namespace App\Http\Controllers;

use RouterOS\Client;
use App\InfoMikrotik;
use App\UserMikrotik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class InfoMikrotikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $userMikrotik = UserMikrotik::findOrFail($id); 
        
        /* conexion al clinete via api */
        $client = new Client([
            'host'     => "$userMikrotik->host",
            'user'     => $userMikrotik->user_host,
            'pass'     => $userMikrotik->password,
            
        ]);  

        $respuesta = $client->query('/interface/getall')->read();
        $clientes = $this->convert_from_latin1_to_utf8_recursively($respuesta);

        

       /* $clientes = json_encode($this->arrayPrueba());  */
        $clientess = json_encode($clientes); 
        
       
       return view('infoMikrotik.index', compact('userMikrotik', 'clientess' , 'id'));
    }


    public  function convert_from_latin1_to_utf8_recursively($dat)
    {
       if (is_string($dat)) {
          return utf8_encode($dat);
       } elseif (is_array($dat)) {
          $ret = [];
          foreach ($dat as $i => $d) $ret[ $i ] = self::convert_from_latin1_to_utf8_recursively($d);
 
          return $ret;
       } elseif (is_object($dat)) {
          foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);
 
          return $dat;
       } else {
          return $dat;
       }
    }
  
    public function arrayPrueba()
    {
       $array =  array (
                0 => 
                array (
              '.id' => '*5',
              'name' => 'ether1_FO_Cantv',
              'default-name' => 'ether1',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:C8',
              'last-link-down-time' => 'apr/04/2021 14:47:14',
              'last-link-up-time' => 'apr/04/2021 15:03:01',
              'link-downs' => '1',
              'rx-byte' => '5398882760130',
              'tx-byte' => '1034884109525',
              'rx-packet' => '5148995881',
              'tx-packet' => '3157453451',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '2425895',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '5398882760130',
              'fp-tx-byte' => '1034884109525',
              'fp-rx-packet' => '5148995881',
              'fp-tx-packet' => '3157453451',
              'running' => 'true',
              'disabled' => 'false',
              'comment' => '::: Interfaz para FO CANTV port 4',
                ),
                1 => 
                array (
              '.id' => '*6',
              'name' => 'ether2',
              'default-name' => 'ether2',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:C9',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                2 => 
                array (
              '.id' => '*7',
              'name' => 'ether3',
              'default-name' => 'ether3',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:CA',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                3 => 
                array (
              '.id' => '*8',
              'name' => 'ether4',
              'default-name' => 'ether4',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:CB',
              'last-link-down-time' => 'apr/26/2021 16:42:20',
              'last-link-up-time' => 'apr/26/2021 16:42:13',
              'link-downs' => '2',
              'rx-byte' => '268464',
              'tx-byte' => '75472',
              'rx-packet' => '3433',
              'tx-packet' => '595',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '268464',
              'fp-tx-byte' => '75472',
              'fp-rx-packet' => '3433',
              'fp-tx-packet' => '595',
              'running' => 'false',
              'disabled' => 'false',
                ),
                4 => 
                array (
              '.id' => '*9',
              'name' => 'ether5',
              'default-name' => 'ether5',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:CC',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                5 => 
                array (
              '.id' => '*A',
              'name' => 'ether6',
              'default-name' => 'ether6',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:CD',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                6 => 
                array (
              '.id' => '*B',
              'name' => 'ether7',
              'default-name' => 'ether7',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:CE',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                7 => 
                array (
              '.id' => '*C',
              'name' => 'ether8',
              'default-name' => 'ether8',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:CF',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                8 => 
                array (
              '.id' => '*D',
              'name' => 'ether9',
              'default-name' => 'ether9',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:D0',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                9 => 
                array (
              '.id' => '*E',
              'name' => 'ether10',
              'default-name' => 'ether10',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:D1',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                10 => 
                array (
              '.id' => '*F',
              'name' => 'ether11_LAN',
              'default-name' => 'ether11',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-down-time' => 'feb/28/2021 12:41:24',
              'last-link-up-time' => 'feb/28/2021 12:41:54',
              'link-downs' => '1',
              'rx-byte' => '1010394352712',
              'tx-byte' => '5024852665593',
              'rx-packet' => '3066580223',
              'tx-packet' => '4614879459',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '1010394352712',
              'fp-tx-byte' => '5024852665593',
              'fp-rx-packet' => '3066580223',
              'fp-tx-packet' => '4614879459',
              'running' => 'true',
              'slave' => 'true',
              'disabled' => 'false',
              'comment' => '::: Puerto LAN 192.168.10.X SW-01-01-P48',
                ),
                11 => 
                array (
              '.id' => '*10',
              'name' => 'ether12',
              'default-name' => 'ether12',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:D3',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                12 => 
                array (
              '.id' => '*1',
              'name' => 'sfp1_DSVINNA',
              'default-name' => 'sfp1',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:C4',
              'last-link-down-time' => 'apr/25/2021 21:31:56',
              'last-link-up-time' => 'apr/25/2021 21:32:25',
              'link-downs' => '4',
              'rx-byte' => '77780109515',
              'tx-byte' => '246559704688',
              'rx-packet' => '233451032',
              'tx-packet' => '255012228',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '77780109515',
              'fp-tx-byte' => '246559704688',
              'fp-rx-packet' => '233451032',
              'fp-tx-packet' => '255012228',
              'running' => 'true',
              'disabled' => 'false',
              'comment' => '::: Interfaz de Conexion con PB tienda DS viña',
                ),
                13 => 
                array (
              '.id' => '*2',
              'name' => 'sfp2',
              'default-name' => 'sfp2',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:C5',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                14 => 
                array (
              '.id' => '*3',
              'name' => 'sfp3',
              'default-name' => 'sfp3',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:C6',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                15 => 
                array (
              '.id' => '*4',
              'name' => 'sfp4',
              'default-name' => 'sfp4',
              'type' => 'ether',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'max-l2mtu' => '10222',
              'mac-address' => 'C4:AD:34:E0:2E:C7',
              'link-downs' => '0',
              'rx-byte' => '0',
              'tx-byte' => '0',
              'rx-packet' => '0',
              'tx-packet' => '0',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'false',
              'disabled' => 'false',
                ),
                16 => 
                array (
              '.id' => '*6A',
              'name' => 'BirgdeLanV11',
              'type' => 'vlan',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1576',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-up-time' => 'feb/28/2021 12:40:24',
              'link-downs' => '0',
              'rx-byte' => '4098457594',
              'tx-byte' => '13422020904',
              'rx-packet' => '29636549',
              'tx-packet' => '11027896',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
                ),
                17 => 
                array (
              '.id' => '*6B',
              'name' => 'BirgdeLanV12',
              'type' => 'vlan',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1576',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-up-time' => 'feb/28/2021 12:40:24',
              'link-downs' => '0',
              'rx-byte' => '635923245',
              'tx-byte' => '40675702',
              'rx-packet' => '3100388',
              'tx-packet' => '258747',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
                ),
                18 => 
                array (
              '.id' => '*6C',
              'name' => 'BirgdeLanV13',
              'type' => 'vlan',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1576',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-up-time' => 'feb/28/2021 12:40:24',
              'link-downs' => '0',
              'rx-byte' => '932151765',
              'tx-byte' => '40667014',
              'rx-packet' => '4889063',
              'tx-packet' => '258675',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
                ),
                19 => 
                array (
              '.id' => '*6D',
              'name' => 'BirgdeLanV14',
              'type' => 'vlan',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1576',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-up-time' => 'feb/28/2021 12:40:24',
              'link-downs' => '0',
              'rx-byte' => '1088915240',
              'tx-byte' => '3104936681',
              'rx-packet' => '6210773',
              'tx-packet' => '2734325',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
                ),
                20 => 
                array (
              '.id' => '*6E',
              'name' => 'BirgdeLanV15',
              'type' => 'vlan',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1576',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-up-time' => 'feb/28/2021 12:40:24',
              'link-downs' => '0',
              'rx-byte' => '863845491',
              'tx-byte' => '40666652',
              'rx-packet' => '7483597',
              'tx-packet' => '258672',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
                ),
                21 => 
                array (
              '.id' => '*12',
              'name' => 'ETh11_vlan101_WANCANTV',
              'type' => 'vlan',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1576',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-down-time' => 'feb/28/2021 12:41:24',
              'last-link-up-time' => 'feb/28/2021 12:41:54',
              'link-downs' => '1',
              'rx-byte' => '0',
              'tx-byte' => '747349747',
              'rx-packet' => '0',
              'tx-packet' => '16942799',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '0',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '0',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
              'comment' => '::: Interfaz para WAN Cantv de la red 190.202.53.16/29',
                ),
                22 => 
                array (
              '.id' => '*16',
              'name' => 'bridgeLAN',
              'type' => 'bridge',
              'mtu' => 'auto',
              'actual-mtu' => '1500',
              'l2mtu' => '1580',
              'mac-address' => 'C4:AD:34:E0:2E:D2',
              'last-link-up-time' => 'feb/28/2021 12:40:24',
              'link-downs' => '0',
              'rx-byte' => '1008767415736',
              'tx-byte' => '5023991177957',
              'rx-packet' => '3062378723',
              'tx-packet' => '4597677978',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '997534985142',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '2990625150',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
                ),
                23 => 
                array (
              '.id' => '*11',
              'name' => 'eth1_VLAN1762_FOCANTV',
              'type' => 'vlan',
              'mtu' => '1500',
              'actual-mtu' => '1500',
              'l2mtu' => '1576',
              'mac-address' => 'C4:AD:34:E0:2E:C8',
              'last-link-down-time' => 'apr/04/2021 14:47:14',
              'last-link-up-time' => 'apr/04/2021 15:03:01',
              'link-downs' => '1',
              'rx-byte' => '5378207469918',
              'tx-byte' => '1022213895946',
              'rx-packet' => '5148651049',
              'tx-packet' => '3157194834',
              'rx-drop' => '0',
              'tx-drop' => '2425894',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '5378207469918',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '5148651049',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
              'comment' => '::: Interfaz VLAN 1762 de Conexion a FO CANTV',
                ),
                24 => 
                array (
              '.id' => '*6F',
              'name' => 'gre-tunnel1',
              'type' => 'gre-tunnel',
              'mtu' => 'auto',
              'actual-mtu' => '1476',
              'l2mtu' => '65535',
              'last-link-down-time' => 'apr/28/2021 23:21:07',
              'last-link-up-time' => 'apr/28/2021 23:39:07',
              'link-downs' => '3',
              'rx-byte' => '1660504',
              'tx-byte' => '3733526',
              'rx-packet' => '46461',
              'tx-packet' => '37904',
              'rx-drop' => '0',
              'tx-drop' => '0',
              'tx-queue-drop' => '0',
              'rx-error' => '0',
              'tx-error' => '0',
              'fp-rx-byte' => '1660504',
              'fp-tx-byte' => '0',
              'fp-rx-packet' => '46461',
              'fp-tx-packet' => '0',
              'running' => 'true',
              'disabled' => 'false',
                ),
          );
    
    return $array;
   
    }
   
    public function store(Request $request)
    {
        //
    }

    public function mostrarInfo()
    {
      $array =   array (
        '.id' => '*5',
        'name' => 'ether1_FO_Cantv',
        'default-name' => 'ether1',
        'type' => 'ether',
        'mtu' => '1500',
        'actual-mtu' => '1500',
        'l2mtu' => '1580',
        'max-l2mtu' => '10222',
        'mac-address' => 'C4:AD:34:E0:2E:C8',
        'last-link-down-time' => 'apr/04/2021 14:47:14',
        'last-link-up-time' => 'apr/04/2021 15:03:01',
        'link-downs' => '1',
        'rx-byte' => '5398882760130',
        'tx-byte' => '1034884109525',
        'rx-packet' => '5148995881',
        'tx-packet' => '3157453451',
        'rx-drop' => '0',
        'tx-drop' => '0',
        'tx-queue-drop' => '2425895',
        'rx-error' => '0',
        'tx-error' => '0',
        'fp-rx-byte' => '5398882760130',
        'fp-tx-byte' => '1034884109525',
        'fp-rx-packet' => '5148995881',
        'fp-tx-packet' => '3157453451',
        'running' => 'true',
        'disabled' => 'false',
        'comment' => '::: Interfaz para FO CANTV port 4',
      );
      return $array;
    }
    public function show($id, $interfaz)
    {
        $userMikrotik = $userMikrotik = UserMikrotik::findOrFail($id); 
        /* pasamos por parametros los id de la y la interfaz para efecutar el comando  */
        $arrayTest = json_encode($this->mostrarInfo());

        dispatch( function($arrayTest) {
          Artisan::call('realtime:execute', [
            'datos' => $arrayTest
        ]);
        });
        
        return view('infoMikrotik.show', compact('arrayTest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfoMikrotik  $infoMikrotik
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoMikrotik $infoMikrotik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoMikrotik  $infoMikrotik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoMikrotik $infoMikrotik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InfoMikrotik  $infoMikrotik
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoMikrotik $infoMikrotik)
    {
        //
    }
}
