<div>
    <section class="account_success_wrapper add_card_wrapper">
        <div class="h-full-screen space-between horizontal-m-w pt-12">
            <div class="w-100">
                <div class="back_btn_grid">
                    <a href="{{ route('client.home') }}" type="button" class="page_back_btn">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </a>
                    <h3>Invoice Download</h3>
                </div>
                <div class="payment_invoice_area mt-24"
                    style="
                        padding: 25px 20px 50px 20px;
                        background-color: white;
                        border-radius: 16px;
                    ">
                    <table style="width: 100%; border-collapse: collapse">
                        <tr>
                            <td>
                                <table style="width: 100%; border-collapse: collapse">
                                    <tr>
                                        <td>
                                            <table style="width: 100%; border-collapse: collapse">
                                                <tr>
                                                    <td>
                                                        <table
                                                            style="
                                                                vertical-align: top;
                                                                width: 53%;
                                                                border-collapse: collapse;
                                                                display: inline-block;
                                                            ">
                                                            <tr>
                                                                <td>
                                                                    <a href="#">
                                                                        <img src="{{ asset('assets/app/images/header/invoice_logo.svg') }}"
                                                                            alt="logo"
                                                                            style="
                                                                                max-width: 124px;
                                                                                width: 100%;
                                                                                height: 32px;
                                                                            " />
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table
                                                            style="
                                                                width: 45%;
                                                                border-collapse: collapse;
                                                                display: inline-block;
                                                            ">
                                                            <tr>
                                                                <td>
                                                                    <h3
                                                                        style="
                                                                            color: #000;
                                                                            font-size: 18px;
                                                                            font-style: normal;
                                                                            font-weight: 700;
                                                                            line-height: normal;
                                                                            ">
                                                                        Invoice
                                                                    </h3>
                                                                    <h5
                                                                        style="
                                                                            color: rgba(0, 0, 0, 0.7);
                                                                            font-size: 16px;
                                                                            font-style: normal;
                                                                            font-weight: 400;
                                                                            line-height: normal;
                                                                            margin-top: 5px;
                                                                            ">
                                                                        # {{ $order->code }}
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 32px">
                                <table style="width: 100%; border-collapse: collapse">
                                    <tr>
                                        <td>
                                            <table style="width: 100%; border-collapse: collapse">
                                                <tr>
                                                    <td>
                                                        <table
                                                            style="
                                                                vertical-align: top;
                                                                width: 53%;
                                                                border-collapse: collapse;
                                                                display: inline-block;
                                                            ">
                                                            <tr>
                                                                <td>
                                                                    <div>
                                                                        <h2
                                                                            style="
                                                                                color: #000;
                                                                                font-size: 18px;
                                                                                font-style: normal;
                                                                                font-weight: 700;
                                                                                line-height: normal;
                                                                            ">
                                                                            Seller
                                                                        </h2>
                                                                        <h6
                                                                            style="
                                                                                color: rgba(0, 0, 0, 0.8);
                                                                                font-size: 14px;
                                                                                font-style: normal;
                                                                                font-weight: 400;
                                                                                line-height: normal;
                                                                                max-width: 200px;
                                                                                width: 100%;
                                                                                margin-top: 8px;
                                                                            ">
                                                                            {{ $order->seller->first_name }}
                                                                            {{ $order->seller->last_name }} <br>
                                                                            {{ $order->seller->email }}
                                                                        </h6>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table
                                                            style="
                                                                width: 45%;
                                                                border-collapse: collapse;
                                                                display: inline-block;
                                                            ">
                                                            <tr>
                                                                <td>
                                                                    <h3
                                                                        style="
                                                                            color: #000;
                                                                            font-size: 16px;
                                                                            font-style: normal;
                                                                            font-weight: 500;
                                                                            line-height: normal;
                                                                            ">
                                                                        Date
                                                                    </h3>
                                                                    <h5
                                                                        style="
                                                                            color: rgba(0, 0, 0, 0.8);
                                                                            font-size: 14px;
                                                                            font-style: normal;
                                                                            font-weight: 400;
                                                                            line-height: normal;
                                                                            margin-top: 8px;
                                                                            ">
                                                                        {{ $order->created_at->format('M d, Y') }}
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table style="width: 100%; border-collapse: collapse; margin-top: 64px">
                        <tr>
                            <th
                                style="
                                    color: #fff;
                                    font-size: 14px;
                                    font-style: normal;
                                    font-weight: 400;
                                    line-height: normal;
                                    border-top-left-radius: 8px;
                                    border-bottom-left-radius: 8px;
                                    padding: 16px;
                                    background: #000;
                                    ">
                                Item
                            </th>
                            <th
                                style="
                                    color: #fff;
                                    font-size: 14px;
                                    font-style: normal;
                                    font-weight: 400;
                                    line-height: normal;
                                    text-align: center;
                                    padding: 16px;
                                    background: #000;
                                    ">
                                Quantity
                            </th>
                            <th
                                style="
                                    color: #fff;
                                    font-size: 14px;
                                    font-style: normal;
                                    font-weight: 400;
                                    line-height: normal;
                                    text-align: end;
                                    border-top-right-radius: 8px;
                                    border-bottom-right-radius: 8px;
                                    padding: 16px;
                                    background: #000;
                                    ">
                                Amount
                            </th>
                        </tr>
                        <tbody>
                            <tr>
                                <td style="padding: 12px 16px">
                                    <h4
                                        style="
                                            color: #000;
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 500;
                                            line-height: normal;
                                            ">
                                        {{ $order->job->title }}
                                    </h4>
                                </td>
                                <td style="padding: 12px 16px; text-align: center">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            ">
                                        1
                                    </h4>
                                </td>
                                <td style="padding: 12px 16px">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            text-align: end;
                                            ">
                                        {{ $order->amount }} SAR
                                    </h4>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding: 12px">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            ">
                                        Subtotal:
                                    </h4>
                                </td>
                                <td style="padding: 12px">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            text-align: end;
                                            ">
                                        {{ $order->amount }} SAR
                                    </h4>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding: 12px">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            ">
                                        Tax (0%)
                                    </h4>
                                </td>
                                <td style="padding: 12px">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            text-align: end;
                                            ">
                                        0 SAR
                                    </h4>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding: 12px">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            ">
                                        Total:
                                    </h4>
                                </td>
                                <td style="padding: 12px">
                                    <h4
                                        style="
                                            color: rgba(0, 0, 0, 0.8);
                                            font-size: 14px;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;
                                            text-align: end;
                                            ">
                                        {{ $order->amount }} SAR
                                    </h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-100 mt-24">
                <button type="submit" class="login_btn">PDF Download</button>
            </div>
        </div>
    </section>
</div>
