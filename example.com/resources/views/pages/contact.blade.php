@extends('layouts.master')
@extends('includes.sidebar')
@section('sidebar-left')
    <div class="field-item even"><h3>Bestuursleden KNBV 2010-2011</h3><p><strong>Voorzitter</strong><br>Prof. dr. J.H.J (Joop) Schaminée<br><em>Alterra, Wageningen</em><br>E-mail: <a href="mailto:joop.schaminee@wur.nl">joop.schaminee@wur.nl</a> <br>Taken: voorzitten vergaderingen</p><p><strong>Vice-voorzitter</strong><br>Prof. dr. Theo Elzenga<br><em>Ecofysiologie van Planten, Universiteit Groningen</em><br>E-mail: <a href="mailto:j.t.m.elzenga@biol.rug.nl">j.t.m.elzenga@biol.rug.nl</a><br>Taken: editor Plant Biology, vervangen van de voorzitter</p><p><strong>Penningmeester</strong><br>Dr. Tijs Ketelaar<br><em>PCB, Wageningen University</em><br>E-mail:&nbsp;<a href="mailto:tijs.ketelaar@wur.nl">tijs.ketelaar@wur.nl</a><br>Taken: beheren financiën, opstellen financieel jaarverslag</p><p><strong>Eerste secretaris</strong><br>Dr. Wouter Kohlen<br><em>PCB, Wageningen University</em><br>E-mail:&nbsp;<a href="mailto:wouter.kohlen@wur.nl">wouter.kohlen@wur.nl</a>&nbsp;
        @stop
@section('sidebar-right')
    @include('components.maps')
@stop
@section('footer')
    <p>&copy; 2017 D&M productions</p>
@stop



