<?php

function seleccionado($nombreEnlace) {
   return request()->routeIs($nombreEnlace) ? 
          'nav-item active' : 'nav-item';
}