@if (session('menssage'))
    <div class="alert alert-success alert-dismissible " data-auto-dismiss="2000">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> 
                    Mensaje Información</h5>  
                    <ul>
                       
                            <li>{{ session('menssage')}}</li>
                        
                    </ul>
    </div>
@endif

        