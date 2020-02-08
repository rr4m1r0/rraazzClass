<header>
    <nav>
        <ul>
            <li><a href="#">centrodecomunicaciones</a></li>
        </ul>
    </nav>
    <div class="javacode">
        <p>
            La clase dentro del paquete centrodecomunicaciones
            Describe el numero de componentes , layouts y su 
            distribucion en el frame o jframe de la clase que 
            esta dentro del paquete blockb.views
        </p>
    </div>
    <div class="componentes">
        <h2><mark>FlowLft4</mark>lt2bBrdr2lbllstgBrdr3lbltfbtn</h2>
        <p>
            System.out.println("Hola Amigo, hacia donde quieres ir:");
            System.out.print("[block[?]] [guis] : ");
            skip = scan.next();
            if(skip.equals("blockb")){
                <mark>blockb();</mark>
            }else{
                System.out.println("Lo siento no conosco ese lugar");
            }
        </p>
        <p>
            private static void <mark>blockb()</mark> {
                String nombre = "";
                Scanner scan = new Scanner(System.in);
                System.out.print("Abre la Interface Grafica con el nombre de: ");
                nombre = scan.next();
                if(nombre.equals("slaw")){
                    SinListenerAlcerrarWindow slaw = new SinListenerAlcerrarWindow();
                }else{
                    System.out.println("ERROR: Layout Desconocido");
                }
            }
        </p>
        <p>
            <mark>Flow-(L)ft-4</mark>-l-t-2b-Brdr-2-lbl-lstg-Brdr-3-lbl-tf-btn
        </p>
        <p>
            "flowlayout aliniado a la izquierda con cuatro componentes" =<br> 
            <mark>Flow-(L)ft-4</mark> = <br>
            "sobre un borderlayout ubicado en el panel seccion norte";<br>
            public class SinListenerAlcerrarWindow {<br>
                private TextField nick;
                private Button login,logout;
                public SinListenerAlcerrarWindow(){
                    super("Centro de Comunicaciones");
                    setLayout(new BorderLayout());
                    Panel norte = north();
                    add(norte,BorderLayout.NORTH);
                    setSize(1000,300);
                    setVisible(true);
                }
                private Panel north(){
                    Panel panel = Panel(new FlowLayout(FlowLayout.LEFT));
                    panel.add(new Label("Nick:"));
                    nick = new TextField(10);
                    panel.add(nick);
                    login = new Button("login");
                    panel.add(login);
                    logout = new Button("logout");
                    panel.add(logout);
                    return panel;
                }
                
            }
        </p>
    </div>
</header>