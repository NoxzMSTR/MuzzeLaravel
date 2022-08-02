<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg orderTicketModal" role="document">
        <div class="modal-content">
            <div class="modal-header bg-brown py-3 px-lg-5">
                <h3 class="text-white mb-0">Order Ticket Online</h3>
            </div>
            <div class="modal-body px-lg-6 pt-lg-6">
                <form action="#">
                    <div class="form-group position-relative mb-5">
                        <label class="d-flex align-items-center">
                            <strong class="font-weight-normal d-block flex-shrink-0 mr-4 text-gray777 sdLabelTitle">Select Date</strong>
                            <input type="date" class="form-control d-block mxInput">
                        </label>
                    </div>
                    <div class="form-group position-relative mb-5">
                        <label class="d-flex align-items-center">
                            <strong class="font-weight-normal d-block flex-shrink-0 mr-4 text-gray777 sdLabelTitle">Select Time</strong>
                            <input type="time" class="form-control d-block mxInput">
                        </label>
                    </div>
                    <h4 class="fontBase mt-7">Choose your Ticket</h4>
                    <div class="ttTableWrap">
                        <table class="w-100 ticketTable text-gray777">
                            <thead>
                                <tr>
                                    <th>Ticket Type</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Adult</td>
                                    <td>25</td>
                                    <td>
                                        <div class="quantity">
                                            <div class="quantity quantityII position-relative d-inline-block mt-1">
                                                <input type="number" min="1" value="2">
                                            </div>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <td>Senior <span class="text-gray">(age above 55)</span></td>
                                    <td>20</td>
                                    <td>
                                        <div class="quantity">
                                            <div class="quantity quantityII position-relative d-inline-block mt-1">
                                                <input type="number" min="1" value="0">
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Student <span class="text-gray">(University/ College)</span></td>
                                    <td>15</td>
                                    <td>
                                        <div class="quantity">
                                            <div class="quantity quantityII position-relative d-inline-block mt-1">
                                                <input type="number" min="1" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td>$15</td>
                                </tr>
                                <tr>
                                    <td>Child <span class="text-gray">(age 13 and under)</span></td>
                                    <td>Free</td>
                                    <td>
                                        <div class="quantity">
                                            <div class="quantity quantityII position-relative d-inline-block mt-1">
                                                <input type="number" min="1" value="0">
                                            </div>
                                        </div>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3">Total Price</td>
                                    <td>$65</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <h4 class="fontBase mt-2 mb-5">Your Information</h4>
                    <div class="form-row mx-n2">
                        <div class="px-2 col-12 col-sm-6">
                            <div class="form-group position-relative mb-4">
                                <input type="text" class="form-control w-100 d-block" placeholder="First Name">
                            </div>
                        </div>
                        <div class="px-2 col-12 col-sm-6">
                            <div class="form-group position-relative mb-4">
                                <input type="text" class="form-control w-100 d-block" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="px-2 col-12 col-sm-6">
                            <div class="form-group position-relative mb-4">
                                <input type="tel" class="form-control w-100 d-block" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="px-2 col-12 col-sm-6">
                            <div class="form-group position-relative mb-4">
                                <input type="email" class="form-control w-100 d-block" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="px-2 col-12">
                            <div class="form-group position-relative mb-4">
                                <input type="text" class="form-control w-100 d-block" placeholder="Address">
                            </div>
                        </div>
                        <div class="px-2 col-12">
                            <div class="form-group position-relative mb-4">
                                <textarea class="form-control d-block w-100" placeholder="Additional Leer Mas&nbsp;"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-secondary fontBase text-uppercase d-block w-100 mb-5" value="Confirm Booking">
                    <div class="text-center">
                        <p>Please checkout your cart and payment for the ticket.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>