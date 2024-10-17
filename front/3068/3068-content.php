<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3068">
    <div class="container">
        <div class="section-title">
            <h2>Our History</h2>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2016</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2015</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2014</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2013</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2012</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge">
                    <i class="fa fa-circle"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2011</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>