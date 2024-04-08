<div class="page-header">
    <div class="web-banner-wrapper">
        <!-- <strong class="typing-text headlight-h">
                <?php if (isset($page_name)): ?>
                    <?php echo $page_name ?>
                <?php endif ?>
                <div class="cursor"></div>
            </strong> -->
        <strong>
            <?php if (isset($page_title)): ?>
                <?php echo $page_title ?>
            <?php endif ?>
        </strong>
    </div>
</div>

<div class="wrapper-breadcrumb">
<div class="bg-shape grey"></div>
<div class="container">
    <div class="topic-head-wrap">
        <div class="topic-head">
            <div class="topic-head-txt">
                <nav class="breadcrumb_wrap" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <!-- <li class="h-breadcrumb" aria-current="page"><a href="index.php">Home </a></li> -->
                        <li class="breadcrumb-item " aria-current="page"><a href="index.php"><i class="fa-solid fa-house-chimney"></i> Home </a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"><a href="index.php"
                                style="color: #fe8b00;">
                                <?php if (isset($page_name)): ?>
                                    <?php echo $page_name ?>
                                <?php endif ?>
                            </a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>