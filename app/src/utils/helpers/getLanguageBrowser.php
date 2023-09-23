<?php 

function getLanguaageBrowser(){
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $browserLanguages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $preferredLanguages = [];
    
        foreach ($browserLanguages as $language) {
            $parts = explode(';', $language);
            $locale = strtolower(trim($parts[0]));
    
            // Ana dilinizi ve istediğiniz başka dilleri burada kontrol edebilirsiniz
            if (strlen($locale) == 2) {
                $preferredLanguages[] = $locale;
            }
        }
    
        // İlk öncelikli dili alabilirsiniz
        $userLanguage = reset($preferredLanguages);
    
        return $userLanguage;
    } else {
        echo "Tarayıcı Dil bilgisi bulunamadı.";
        return 'default';
    }
}

?>