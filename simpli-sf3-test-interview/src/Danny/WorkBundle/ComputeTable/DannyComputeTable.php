<?php
// src/Danny/WorkBundle/ComputeTable/DannyComputeTable.php

namespace Danny\WorkBundle\ComputeTable;

class DannyComputeTable
{
  private $table;
  private $height;
  private $width;

  public function __construct($inputData)
  {
    $this->table = $inputData;
    $this->height = count($this->table);
    $this->width = max(array_map('count', $this->table)); // au cas si on a des sous tableaux de dimensions différentes
  }

  public function compute()
  {
    $res = $this->table;

    // ajout d'une colonne somme total et pair/impair
    for($j=0;$j<$this->height;$j++){
      $temp=0;
      for($i=0;$i<$this->width;$i++){
        $temp+=$res[$j][$i];
      }
      $res[$j][$this->width] = $temp;

      $res[$j][$this->width]%2 == 1? $res[$j][$this->width+1]='impair' : $res[$j][$this->width+1]='pair';
    }

    return $res;
  }

  public function getWidth()
  {
    return $this->width;
  }

  public function getHeight()
  {
    return $this->height;
  }
}