

<!-- return div that will display the content the user requests from searchabr -->

<div id="writerContentPopup"> <!--data will show up here when user clicks on search result (will be like facebooks search engine and how a div apears as user types in string (str)-->

<ul>
@foreach($writers as $writer)
                            
<li class="listResults">
                                
 

 <a class="writers" href="{{ url('writers/show/') }}/{{ $writer->id }}">
{{ $writer->name }}</a>


 <!-- wirters image/thumbnail -->
<!--<img src="../storage/app/public/photos/fWRurIPxk6dM2K9xE2Ak9oxZ9kz4HoZXZiiKso6m.png">-->

<img src="/storage/app/public/{{$writer->writer_photo}}">
                                   
 


</li>  

@endforeach
</ul>
</div>



                      

                       