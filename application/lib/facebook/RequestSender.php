<?php
Yii::import('application.lib.facebook.request.IRequest');
Yii::import('application.lib.facebook.response.HttpRawResponse');

class RequestSender
{
    public function sendRequest(IRequest $request)
    {
        $options = $this->getCurlOptions($request);
        $response = $this->makeCurlRequest($options);
        return $response;
    }

    protected function getCurlOptions(IRequest $request)
    {
        $curl = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array()
        );

        $uri = FacebookSettings::$API_ROOT . '/' . $request->getRoute();

        $params = $request->getQueryStringParams();
        if (empty($params))
        {
            $params = array();
        }

        if (!isset($params['access_token']))
        {
            $params['access_token'] = FacebookSettings::$APP_ID . '|' . FacebookSettings::$APP_SECRET;
        }

        $first = True;
        foreach ($params as $key=>$value)
        {
            $uri .= $first ? '?' : '&';
            $uri .= $key . '=' . urlencode($value);
            $first = false;
        }

        $curl[CURLOPT_URL] = str_replace(" ", "%20", $uri);
        $curl[CURLOPT_HEADER] = true;

        return $curl;
    }

    protected function makeCurlRequest($curlOptions)
    {
        $ch = curl_init();
        curl_setopt_array($ch, $curlOptions);
        $rawResponse = curl_exec($ch);

        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headerInfo = curl_getinfo($ch);

        curl_close($ch);

        // Parse out the actual HTTP headers (vs the PHP provided "headers" given to us by curl_getInfo). First we
        // separate the headers and body from the raw response.
        $headers = substr($rawResponse, 0, $headerSize);
        $body = substr($rawResponse, $headerSize);

        // Then we merge the parsed HTTP headers with the PHP provided headers. Finally assign as needed.
        $response = new HttpRawResponse();
        $response->headers = array_merge($headerInfo, $this->parseHttpHeaders($headers));
        $response->content = $body;
        $response->code = $response->headers['http_code'];

        // TODO: check status code for errors?

        return $response;
    }

    /**
     * Method used to parse raw HTTP headers into an array of headers.
     *
     * @param $rawHeaders
     * @return array of headers
     */
    protected function parseHttpHeaders($rawHeaders)
    {
        $headers = array();
        $fields = explode("\r\n", preg_replace('/\x0D\x0A[\x09\x20]+/', ' ', $rawHeaders));
        foreach($fields as $field)
        {
            if (preg_match('/([^:]+): (.+)/m', $field, $match))
            {
                $match[1] = preg_replace('/(?<=^|[\x09\x20\x2D])./e', 'strtoupper("\0")', strtolower(trim($match[1])));
                if (isset($headers[$match[1]]))
                {
                    $headers[$match[1]] = array($headers[$match[1]], $match[2]);
                }
                else
                {
                    $headers[$match[1]] = trim($match[2]);
                }
            }
        }

        return $headers;
    }
} 