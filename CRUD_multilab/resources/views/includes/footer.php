<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- API source
    <script>
    let url = 'http://localhost:8000/api/centros/';

    new Vue({
        el: '#app',
        vuetify: new Vuetify(),
        data() {
            return {            
                centros: [],
                dialog: false,
                operacion: '',            
                centros:{
                    id: null,
                    local_name:'',
                    local_address:'',
                    created_at:''
                }          
            }
        },
        created(){               
                this.mostrar()
        },  
        methods:{          
                //MÉTODOS PARA EL CRUD
                mostrar:function(){
                axios.get(url)
                .then(response =>{
                    this.locales = response.data;                   
                })
                },
                crear:function(){
                    let parametros = {local_name:this.local.local_name, local_address:this.local.local_address };                
                    axios.post(url, parametros)
                    .then(response =>{
                    this.mostrar();
                    });     
                    this.local.local_name="";
                    this.local.local_address="";
                },                        
                editar: function(){
                let parametros = {local_name:this.local.local_name, local_address:this.local.local_address, id:this.local.id};                            
                //console.log(parametros);                   
                    axios.put(url+this.local.id, parametros)                            
                    .then(response => {                                
                        this.mostrar();
                    })                
                    .catch(error => {
                        console.log(error);            
                    });
                },
                borrar:function(id){
                Swal.fire({
                    title: '¿Confirma eliminar el registro?',   
                    confirmButtonText: `Confirmar`,                  
                    showCancelButton: true,                          
                }).then((result) => {                
                    if (result.isConfirmed) {      
                        //procedimiento borrar
                        axios.delete(url+id)
                        .then(response =>{           
                            this.mostrar();
                        });      
                        Swal.fire('¡Eliminado!', '', 'success')
                    } else if (result.isDenied) {                  
                    }
                });              
                },

                //Botones y formularios
                guardar:function(){
                if(this.operacion=='crear'){
                    this.crear();                
                }
                if(this.operacion=='editar'){ 
                    this.editar();                           
                }
                this.dialog=false;                        
                }, 
                formNuevo:function () {
                this.dialog=true;
                this.operacion='crear';
                this.local.local_name='';                           
                this.local.local_address='';
                },
                formEditar:function(id, descripcion, precio, stock){
                //capturamos los datos del registro seleccionado y los mostramos en el formulario
                this.local.id = id;
                this.local.local_name='';                           
                this.local.local_address='';                     
                this.dialog=true;                            
                this.operacion='editar';
                }
        }      
        });
    </script> -->
</body>
</html>
