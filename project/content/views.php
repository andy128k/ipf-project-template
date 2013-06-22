<?php

function Content_Views_Index($request, $match)
{
    $context = array();
    return IPF_Shortcuts::RenderToResponse('index.html', $context, $request);
}
