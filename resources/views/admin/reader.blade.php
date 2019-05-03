<div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <!-- Image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ $link }}" alt="Example photo">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>

            <div class="modal-body">
                <h5>Popover in a modal</h5>
                <p>This
                    <a role="button" class="btn btn-secondary popover-test" title="" data-content="Popover body content is set in this attribute."
                       data-original-title="Popover title" data-toggle="popover">button</a> triggers a popover on click.</p>
                <hr>
                <h5>Tooltips in a modal</h5>
                <p>
                    <a class="tooltip-test" title="" data-original-title="Tooltip" data-toggle="tooltip">This link</a>
                    and
                    <a class="tooltip-test" title="" data-original-title="Tooltip" data-toggle="tooltip">that link</a>
                    have tooltips on hover.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>

        </div>
    </div>
</div>
