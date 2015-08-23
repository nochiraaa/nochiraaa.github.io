        <script>
if(_ua.Mobile){}{

    var active_user_counts = 1;

    $.ajax({
        type: 'post',
        url: 'http://www.suchmos.com/wp/wp-content/themes/suchmos/activeuser.php',
        data: {
            'dummy': 'dummy',
        },
        success: function(data) {
          var tmp = JSON.parse(data);
          active_user_counts = tmp['activeUsers'];
          

          var SEPARATION = 75, AMOUNTX = 120, AMOUNTY = 40;

            var container;
            var camera, scene, renderer;

            var particles, particle, count = 0;

            var windowHalfX = window.innerWidth / 2;
            var windowHalfY = window.innerHeight / 2;

            var center_num = 5;
            var variable = 1 - Math.exp( (-active_user_counts) / center_num);
            if(active_user_counts == 1){
                variable = 0;
            }
            if(active_user_counts == 2){
                variable = 0.5;
            }
            init();
            animate();

            function init() {

                container = document.createElement( 'div' );
                container.id = "wave";
                document.body.appendChild( container );

                camera = new THREE.PerspectiveCamera( 90, window.innerWidth / window.innerHeight, 1, 10000 );
                
                var camera_position_z_variable = variable * 500;
                var camera_position_y_variable = variable * 200;
                var camera_position_z = 2000 - camera_position_z_variable;//2000~1500
                var camera_position_y = 600 - camera_position_y_variable;//600~400    
                
                camera.position.z = camera_position_z;
                camera.position.y = camera_position_y;

                scene = new THREE.Scene();

                particles = new Array();

                var PI2 = Math.PI * 2;
                var material = new THREE.SpriteCanvasMaterial( {
                    color: 0xff8e15,
                    program: function ( context ) {
                        context.beginPath();
                        context.arc( 0, 0, 0.41, 0, PI2, true );
                        context.fill();
                    }
                } );

                var i = 0;

                for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

                    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

                        particle = particles[ i ++ ] = new THREE.Sprite( material );
                        particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
                        particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
                        scene.add( particle );

                    }

                }

                renderer = new THREE.CanvasRenderer();
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                container.appendChild( renderer.domElement );

            }

            function onWindowResize() {

                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            function animate() {
                requestAnimationFrame( animate );
                render();
            }

            function render() {
                var i = 0;
                var particle_position_y_variable = variable * 1.2;
                var particle_position_y = 0.3 + particle_position_y_variable;//0.3~1.5
                for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
                    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
                        particle = particles[ i++ ];
                        particle.position.y = (( Math.sin( ( ix + count ) * 0.34 ) * 100 ) +
                            ( Math.sin( ( iy + count ) * 0.5 ) * 50 ))*particle_position_y;
                        particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 5 +
                            ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 5;
                    }
                }
                renderer.setClearColor( new THREE.Color(0x00020a) );//背景色
                renderer.render( scene, camera );
                count += 0.05;

            }

        },
        error: function(){
        	active_user_counts = 1;
          

          var SEPARATION = 75, AMOUNTX = 120, AMOUNTY = 40;

            var container;
            var camera, scene, renderer;

            var particles, particle, count = 0;

            var windowHalfX = window.innerWidth / 2;
            var windowHalfY = window.innerHeight / 2;

            var center_num = 5;
            var variable = 1 - Math.exp( (-active_user_counts) / center_num);
            if(active_user_counts == 1){
                variable = 0;
            }

            init();
            animate();

            function init() {

                container = document.createElement( 'div' );
                container.id = "wave";
                document.body.appendChild( container );

                camera = new THREE.PerspectiveCamera( 90, window.innerWidth / window.innerHeight, 1, 10000 );
                
                var camera_position_z_variable = variable * 500;
                var camera_position_y_variable = variable * 200;
                var camera_position_z = 2000 - camera_position_z_variable;//2000~1500
                var camera_position_y = 600 - camera_position_y_variable;//600~400    
                
                camera.position.z = camera_position_z;
                camera.position.y = camera_position_y;

                scene = new THREE.Scene();

                particles = new Array();

                var PI2 = Math.PI * 2;
                var material = new THREE.SpriteCanvasMaterial( {
                    color: 0xff8e15,
                    program: function ( context ) {
                        context.beginPath();
                        context.arc( 0, 0, 0.41, 0, PI2, true );
                        context.fill();
                    }
                } );

                var i = 0;

                for ( var ix = 0; ix < AMOUNTX; ix ++ ) {

                    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {

                        particle = particles[ i ++ ] = new THREE.Sprite( material );
                        particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
                        particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
                        scene.add( particle );

                    }

                }

                renderer = new THREE.CanvasRenderer();
                renderer.setPixelRatio( window.devicePixelRatio );
                renderer.setSize( window.innerWidth, window.innerHeight );
                container.appendChild( renderer.domElement );

            }

            function onWindowResize() {

                windowHalfX = window.innerWidth / 2;
                windowHalfY = window.innerHeight / 2;

                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();

                renderer.setSize( window.innerWidth, window.innerHeight );

            }

            function animate() {
                requestAnimationFrame( animate );
                render();
            }

            function render() {
                var i = 0;
                var particle_position_y_variable = variable * 1.2;
                var particle_position_y = 0.3 + particle_position_y_variable;//0.3~1.5
                for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
                    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
                        particle = particles[ i++ ];
                        particle.position.y = (( Math.sin( ( ix + count ) * 0.34 ) * 100 ) +
                            ( Math.sin( ( iy + count ) * 0.5 ) * 50 ))*particle_position_y;
                        particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 5 +
                            ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 5;
                    }
                }
                renderer.setClearColor( new THREE.Color(0x00020a) );//背景色
                renderer.render( scene, camera );
                count += 0.05;

            }
        }
        
      }); 
}

if( navigator.userAgent.indexOf('Android') > 0 ) {
    $("body").addClass("Android");
}

        </script>
        <script>
            $(function(){
                $('#panel-btn').click(function(){
                    $("#panel-btn-icon").toggleClass("close");
                    $(this).toggleClass("close");
                    $('header').toggleClass('visible');
                    $(this).toggleClass('visible');
                    $('.btn-wrapper').toggleClass('visible');
                    $(this).toggleClass('visible');
                });
            });
        </script>
<?php wp_footer(); ?>
    </body>
</html>