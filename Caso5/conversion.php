<?php
class conversion
{
  private $numero;
  //set de la variable numero
  public function setNumero($numero){
    $this->numero=$numero;}
  //get de la variable numero
  public function getNumero(){
    return $this->numero;}
  //conversion de euros a libras
  public function eurosLibras(){
    return $this->numero*0.892450;}
  //conversion de euros a dolares
  public function eurosDolares(){
    return $this->numero*1.23167;}
  //conversion de libras a euros
  public function librasEuros(){
    return $this->numero*1.12064;}
  //conversion de libras a dolares
  public function librasDolares(){
    return $this->numero*1.38025;}
  //conversion de dolares a euros
  public function dolaresEuros(){
    return $this->numero*0.811908;}
  //conversion de dolares a libras
  public function dolaresLibras(){
    return $this->numero*0.724505;}
}
 ?>
