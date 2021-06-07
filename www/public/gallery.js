
			var imgNr = 0;
			function setBigImg( nr )
			{
				document.querySelector('.big img').src = getSrc( nr ) ;
				document.querySelectorAll( ".thumbs img" )[nr].className = "activ" ;
				document.querySelectorAll( ".thumbs img" )[imgNr].className = "" ;
				imgNr = nr ;
			}
			function getSrc( nr )
			{
				switch( nr )
				{
					case 0 : return '../images/big/Chrysanthemum.jpg' ;
					case 1 : return '../images/big/Desert.jpg' ;
					case 2 : return '../images/big/Hydrangeas.jpg' ;
					case 3 : return '../images/big/Jellyfish.jpg' ;
					case 4 : return '../images/big/Koala.jpg' ;
					case 5 : return '../images/big/Lighthouse.jpg' ;
					case 6 : return '../images/big/Penguins.jpg' ;
					case 7 : return '../images/big/Tulips.jpg' ;
				}
			}
			function nextImg()
			{
				if( imgNr + 1 < 8 )
					setBigImg( imgNr + 1 );
				else
					setBigImg( 0 );
			}
			function prevImg()
			{
				if( imgNr - 1 >= 0 )
					setBigImg( imgNr - 1 )
				else
					setBigImg( 7 );
			}
		
			function init()
			{
				var btns = document.querySelectorAll( ".ctrls button" );
				var thumbs = document.querySelectorAll( ".thumbs img" );
				
				
				btns[0].addEventListener( "click", prevImg ) ;
				btns[1].addEventListener( "click", nextImg ) ;
				
				for( var i = 0 ; i < thumbs.length ; i++ )
				{
					thumbs[i].nr = i ;
					thumbs[i].addEventListener( "click" , function(){
																		setBigImg( this.nr ); 
																	} )
				}
			}
			
			window.addEventListener( "load" , init );
			
		