<div class="container">
        <header class="clearfix">
				<span>Sawi Name In Full <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>Website Logo And brief</h1>
				<nav>
					<a href="#" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
					<a href="#" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a>
					<a href="#" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a href="#" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a>
				</nav>
			</header>
<div class="main" style="margin-bottom:20px">
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
            <div class="cbp-hsinner">
                <ul class="cbp-hsmenu">
                    <li>
                        <a href="{{ route('home') }}" class="hm">Home</a>
                    </li>
                    <li>
                     <a href="{{ route('about')}}" class="abt">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('admission')}}" class="adm">Admission</a>
                    </li>
                    <li>
                            <a href="#">Courses</a>
                        </li>
                    <li> <a href="{{ route('gallery')}}"> Gallery </a> </li>
                    <li><a href="{{ route('project')}}">Projects</a></li>
                    <li><a href="{{ route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>
<script src="{{asset('js/js/cbpHorizontalSlideOutMenu.min.js')}}"></script>
		<script>
			var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
		</script>