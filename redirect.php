<?php

/**
 * Redirect Class to ensure that a client is redirected when necessary
 *
 * Usage:
 * new redirect(YOUR_URL);
 * 
 * @param string $url
 */
class redirect
{
    /** Redirect to another page
     *
     * @param string $url The URL to redirect to
     *
     */
    public function __construct($url)
    {
        header("Location: $url");
        // calling js($url) to ensure that the redirect happens
        $this->js($url);
        die();
    }

    /**
     * Redirect to a given URL using JavaScript as a fallback.
     *
     * @param string $url
     * @return void
     *
     */
    public function js($url)
    {
        echo "<script>window.location.href='$url'</script>";
        die();
    }
}

?>
