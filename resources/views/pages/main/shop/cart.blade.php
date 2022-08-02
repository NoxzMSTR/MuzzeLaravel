@extends('layout.main')
@section('content')
    <!-- cartPageBlock -->
    <section class="cartPageBlock pt-7 pb-7 pt-md-9 pb-md-9 pt-lg-12 pb-lg-14 pt-xl-18 pb-xl-22">
        <div class="container">
            <!-- topHeadingHead -->
            <header class="topHeadingHead text-center mb-5 mb-lg-9">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <h1 class="h1Large mb-4">Cart Page</h1>
                    </div>
                </div>
            </header>
            <form action="#">
                <!-- carterTableWrap -->
                <div class="carterTableWrap">
                    <!-- cartTable -->
                    <table class="cartTable text-secondary w-100 mb-9">
                        <thead>
                            <tr>
                                <th class="tbCol1">Product</th>
                                <th class="tbCol2">Price</th>
                                <th class="tbCol3">Quantity</th>
                                <th class="tbCol4">Total</th>
                                <th class="tbCol5">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tbCol1">
                                    <div class="tdWrap">
                                        <div class="d-flex w-100 align-items-center">
                                            <div class="imgHolder flex-shrink-0 mr-4">
                                                <img src="http://via.placeholder.com/60x60" class="img-fluid"
                                                    alt="image description">
                                            </div>
                                            <strong class="title d-block text-gray777 font-weight-normal">Blcak Fancy Vavoom
                                                Cap</strong>
                                        </div>
                                    </div>
                                </td>
                                <td class="tbCol2">
                                    <div class="tdWrap">£95.00</div>
                                </td>
                                <td class="tbCol3">
                                    <div class="tdWrap">
                                        <div class="quantity quantityII position-relative d-inline-block mt-1">
                                            <input type="number" min="1" value="2">
                                        </div>
                                    </div>
                                </td>
                                <td class="tbCol4">
                                    <div class="tdWrap">£190.00</div>
                                </td>
                                <td class="tbCol5 text-right">
                                    <div class="tdWrap">
                                        <a href="javascript:void(0);"
                                            class="btnCartRemove border rounded-circle d-inline-block align-top position-relative"><span
                                                class="sr-only">remove</span></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbCol1">
                                    <div class="tdWrap">
                                        <div class="d-flex w-100 align-items-center">
                                            <div class="imgHolder flex-shrink-0 mr-4">
                                                <img src="http://via.placeholder.com/60x60" class="img-fluid"
                                                    alt="image description">
                                            </div>
                                            <strong class="title d-block text-gray777 font-weight-normal">Mia Calimao
                                                Uttliparian Plate</strong>
                                        </div>
                                    </div>
                                </td>
                                <td class="tbCol2">
                                    <div class="tdWrap">£34.00</div>
                                </td>
                                <td class="tbCol3">
                                    <div class="tdWrap">
                                        <div class="quantity quantityII position-relative d-inline-block mt-1">
                                            <input type="number" min="1" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="tbCol4">
                                    <div class="tdWrap">£34.00</div>
                                </td>
                                <td class="tbCol5 text-right">
                                    <div class="tdWrap">
                                        <a href="javascript:void(0);"
                                            class="btnCartRemove border rounded-circle d-inline-block align-top position-relative"><span
                                                class="sr-only">remove</span></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbCol1">
                                    <div class="tdWrap">
                                        <div class="d-flex w-100 align-items-center">
                                            <div class="imgHolder flex-shrink-0 mr-4">
                                                <img src="http://via.placeholder.com/60x60" class="img-fluid"
                                                    alt="image description">
                                            </div>
                                            <strong class="title d-block text-gray777 font-weight-normal">ART Xhoopee Juke
                                                by kai Art</strong>
                                        </div>
                                    </div>
                                </td>
                                <td class="tbCol2">
                                    <div class="tdWrap">£87.00</div>
                                </td>
                                <td class="tbCol3">
                                    <div class="tdWrap">
                                        <div class="quantity quantityII position-relative d-inline-block mt-1">
                                            <input type="number" min="1" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="tbCol4">
                                    <div class="tdWrap">£87.00</div>
                                </td>
                                <td class="tbCol5 text-right">
                                    <div class="tdWrap">
                                        <a href="javascript:void(0);"
                                            class="btnCartRemove border rounded-circle d-inline-block align-top position-relative"><span
                                                class="sr-only">remove</span></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="px-0">
                                    <div class="tdWrap">
                                        <div class="d-flex pt-1">
                                            <input type="text" class="form-control mr-2 coupenField"
                                                placeholder="Coupon Code">
                                            <button type="button" class="btn bdr2 btn-outline-light btnCoupen">Apply
                                                Coupon</button>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2" class="px-0">
                                    <div class="tdWrap">
                                        <div class="text-right">
                                            <a href="javascript:void(0);" class="btn btnBrown btnUpdateCart">Update Cart</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- carterTableWrap -->
                <div class="carterTableWrap">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-8 offset-md-4 col-lg-6 offset-lg-6">
                            <h2 class="mb-7">Cart Totals</h2>
                            <!-- cartTotals -->
                            <table class="w-100 cartTotals text-secondary mb-5">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="tdWrap">Subtotal</div>
                                        </td>
                                        <td>
                                            <div class="tdWrap">£34.00</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="tdWrap">Shipping</div>
                                        </td>
                                        <td>
                                            <div class="tdWrap">
                                                <div class="custom-control small custom-radio text-gray777 mt-1 mb-1">
                                                    <input type="radio" id="free" name="shipment"
                                                        class="custom-control-input" checked>
                                                    <label class="custom-control-label" for="free">Free
                                                        Shipping</label>
                                                </div>
                                                <div class="custom-control mb-1 small custom-radio text-gray777">
                                                    <input type="radio" id="flat" name="shipment"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="flat">Flat Rate:
                                                        &nbsp;<span class="text-secondary">£10.00</span></label>
                                                </div>
                                                <button type="button" class="btnCalcShipment border-0 p-0 mb-3">Calculate
                                                    Shipping</button>
                                                <select class="chosenSelect csSelect csSelectSmall w-100"
                                                    data-placeholder="Choose Country">
                                                    <option value="1">Germany</option>
                                                    <option value="2">ipsum</option>
                                                    <option value="3">dolor</option>
                                                </select>
                                                <select class="chosenSelect csSelect csSelectSmall w-100"
                                                    data-placeholder="Select an option&hellip;">
                                                    <option value="1">Germany</option>
                                                    <option value="2">ipsum</option>
                                                    <option value="3">dolor</option>
                                                </select>
                                                <input type="text" class="form-control cartField w-100 d-block mb-2"
                                                    placeholder="Postcode / ZIP">
                                                <button class="btn btn-light cartBtn mb-4">Update Totals</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="tdWrap">Total</div>
                                        </td>
                                        <td>
                                            <div class="tdWrap">£198.00</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-secondary py-xl-4 w-100 d-block text-uppercase">Proceed
                                to checkout</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
