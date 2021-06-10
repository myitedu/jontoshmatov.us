<!-- Modal -->
<div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Airport Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>City</th>
                        <th class="city"></th>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td class="country"></td>
                    </tr>
                    <tr>
                        <td>Code</td>
                        <td class="code"></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td class="location"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td class="name"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td class="phone"></td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td class="website"></td>
                    </tr>
                    <tr>
                        <td class="airport_map" colspan="2">
                            <iframe id="googlemap" src = "https://maps.google.com/maps?q=10.305385,77.923029&hl=es;z=14&amp;output=embed"></iframe>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<style>

    th{
        background-color: darkred !important;
        color: gold;

    }

    #googlemap{
        width: 100%;
        height: 400px;
    }

    .airport_map{
        text-align: center;
    }
</style>
