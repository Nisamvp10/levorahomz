

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Enquiry</title>
</head>

<body style="margin:0; padding:0; background:#f4f6f8; font-family:Arial, Helvetica, sans-serif; color:#333;">

<table width="100%" cellpadding="0" cellspacing="0" border="0"
       style="background:#f4f6f8; padding:30px 15px;">

    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" border="0"
                   style="width:100%; max-width:600px; background:#ffffff; border-radius:10px; overflow:hidden;">

                <!-- Header -->
                <tr>
                    <td style="background:#1f2937; padding:25px 30px; text-align:center;">

                        <h1 style="margin:0; color:#ffffff; font-size:24px;">
                            New Product Enquiry
                        </h1>

                    </td>
                </tr>


                <!-- Enquiry Date -->
                <tr>
                    <td style="padding:20px 30px 5px;">

                        <p style="margin:0; font-size:14px; color:#6b7280;">
                            Enquiry Date:
                            <strong style="color:#333;">
                                <?= date('d M Y, h:i A') ?>
                            </strong>
                        </p>

                    </td>
                </tr>


                <!-- Product -->
                <tr>
                    <td style="padding:20px 30px;">

                        <?php if (!empty($product['product_image'])): ?>

                            <img
                                src="<?= validImg($product['product_image']) ?>"
                                alt="<?= esc($product['product_title']) ?>"
                                style="
                                    width:100%;
                                    max-width:540px;
                                    height:auto;
                                    display:block;
                                    margin:0 auto 20px;
                                    border-radius:8px;
                                "
                            >

                        <?php endif; ?>


                        <!-- Product Title -->
                        <h2 style="
                            margin:0 0 10px;
                            font-size:22px;
                            color:#111827;
                        ">
                            <?= esc($product['product_title']) ?>
                        </h2>


                        <!-- Price -->
                        <p style="
                            margin:0 0 15px;
                            font-size:20px;
                            font-weight:bold;
                            color:#16a34a;
                        ">
                            <?= number_format((float)$product['price'], 2) ?>
                        </p>


                        <!-- Short Description -->
                        <?php if (!empty($product['short_description'])): ?>

                            <p style="
                                margin:0;
                                font-size:15px;
                                line-height:1.6;
                                color:#4b5563;
                            ">
                                <?= esc($product['short_description']) ?>
                            </p>

                        <?php endif; ?>


                        <hr style="
                            border:0;
                            border-top:1px solid #e5e7eb;
                            margin:25px 0;
                        ">


                        <!-- Description -->
                        <?php if (!empty($product['description'])): ?>

                            <h3 style="
                                margin:0 0 10px;
                                font-size:17px;
                                color:#111827;
                            ">
                                Product Description
                            </h3>

                            <div style="
                                font-size:15px;
                                line-height:1.7;
                                color:#4b5563;
                            ">
                                <?= $product['description'] ?>
                            </div>

                        <?php endif; ?>

                    </td>
                </tr>


                <!-- Customer Details -->
                <tr>
                    <td style="padding:0 30px 30px;">

                        <h3 style="
                            margin:0 0 15px;
                            font-size:18px;
                            color:#111827;
                        ">
                            Customer Details
                        </h3>


                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                               style="background:#f9fafb; border-radius:8px;">

                            <!-- Name -->
                            <tr>
                                <td style="
                                    padding:12px 15px;
                                    width:120px;
                                    font-size:14px;
                                    color:#6b7280;
                                ">
                                    Name
                                </td>

                                <td style="
                                    padding:12px 15px;
                                    font-size:14px;
                                    color:#111827;
                                    font-weight:bold;
                                ">
                                    <?= esc($data['name']) ?>
                                </td>
                            </tr>


                            <!-- Email -->
                            <tr>
                                <td style="
                                    padding:12px 15px;
                                    font-size:14px;
                                    color:#6b7280;
                                ">
                                    Email
                                </td>

                                <td style="
                                    padding:12px 15px;
                                    font-size:14px;
                                ">
                                    <a href="mailto:<?= esc($data['email']) ?>"
                                       style="color:#2563eb; text-decoration:none;">
                                        <?= esc($data['email']) ?>
                                    </a>
                                </td>
                            </tr>


                            <!-- Phone -->
                            <tr>
                                <td style="
                                    padding:12px 15px;
                                    font-size:14px;
                                    color:#6b7280;
                                ">
                                    Phone
                                </td>

                                <td style="
                                    padding:12px 15px;
                                    font-size:14px;
                                ">
                                    <a href="tel:<?= esc($data['phone']) ?>"
                                       style="color:#2563eb; text-decoration:none;">
                                        <?= esc($data['phone']) ?>
                                    </a>
                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>


                <!-- Customer Message -->
                <tr>
                    <td style="padding:0 30px 30px;">

                        <h3 style="
                            margin:0 0 10px;
                            font-size:18px;
                            color:#111827;
                        ">
                            Customer Message
                        </h3>

                        <div style="
                            background:#f9fafb;
                            border-left:4px solid #2563eb;
                            padding:15px;
                            border-radius:4px;
                        ">

                            <p style="
                                margin:0;
                                font-size:15px;
                                line-height:1.7;
                                color:#4b5563;
                            ">
                                <?= nl2br(esc($data['message'])) ?>
                            </p>

                        </div>

                    </td>
                </tr>


                <!-- Footer -->
                <tr>
                    <td style="
                        background:#f9fafb;
                        padding:20px 30px;
                        text-align:center;
                    ">

                        <p style="
                            margin:0;
                            font-size:12px;
                            color:#9ca3af;
                        ">
                            This is an automated product enquiry notification.
                        </p>

                    </td>
                </tr>

            </table>

        </td>
    </tr>

</table>

</body>
</html>