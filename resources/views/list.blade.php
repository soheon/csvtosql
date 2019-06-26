@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome!
                </div>

            </div>
        </div>
    </div>
</div>
<div class = "container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Alabama </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Alaska </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Arkansas </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>California </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Colorado </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Connecticut </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Delaware </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Florida </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Georgia </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Hawaii </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Idaho </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Illinois Indiana  </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Maryland  </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Iowa </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Kansas </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Kentucky </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Louisiana </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Maine </p>
                </div>
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Maine </p>
                </div>
                <div class = "row text-center">
                        <form action ="" method="get">
                            <input type="hidden" class="" name="area" value="AL"/>
                            <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                            <button type="submit">load</button>
                        </form>
                    </div>
                    <div class = "row text-center">
                        <form action ="" method="get">
                            <input type="hidden" class="" name="area" value="AL"/>
                            <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                            <button type="submit">download</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row">
        
        <div class="col-md-2">
            <div class="thumbnail">
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Massachusetts </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>Michigan </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>Minnesota </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>Mississippi </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>Missouri </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Montana Nebraska </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>Nevada </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>New Hampshire </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>New Jersey </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>New Mexico </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                
                <div class="caption">
                    <p>New York </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Oklahoma </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>North Dakota </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Oklahoma </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Ohio </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Oklahoma </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Oregon </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Pennsylvania Rhode Island </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>South Carolina </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Tennessee </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Texas </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Utah </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Vermont </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Virginia </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Washington </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>West Virginia </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Wisconsin </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                
                <img src="{{asset('images/bg-img/small_map.png')}}" alt="" style="width:100%">
                <div class="caption">
                    <p>Wyoming </p>
                </div>
                
                <div class = "row text-center">
                    <form action ="/upload" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style="width:70%">load</button>
                    </form>
                
                    <form action ="/download" method="get">
                    {{csrf_field()}}
                        <input type="hidden" class="" name="area" value="AL"/>
                        <input type="hidden" class="" name="bus" value="{{ $buss }}"/>
                        <button type="submit" style= "width:70%">download</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
