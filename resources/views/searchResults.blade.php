

<!-- return div that will display the content the user requests from searchabr -->

<div id="writerContentPopup"> <!--data will show up here when user clicks on search result (will be like facebooks search engine and how a div apears as user types in string (str)-->

<ul>
@foreach($writers as $writer)
                            
<li class="listResults">
                                
 


                                   
 
<!-- /////////////////////////////////////////////////////// -->


    <li><a href="{{ url('writers/show/') }}/{{ $writer->id }}"> {{ $writer->name }}</a></li>
    <img src="/images/{{$writer->writer_photo}}">




</li>  

@endforeach
</ul>
</div>



                      

                       