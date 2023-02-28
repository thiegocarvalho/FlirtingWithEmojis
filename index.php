<?php
class FlirtingWithEmojis
{
    private function 💋($👩‍🎤 = 0, $👨‍🎤 = 1)
    {
        if ($👨‍🎤 && $👩‍🎤) {
            return "💋";
        }
        return "💔";
    }

    private function 🍻()
    {
        return "🍻";
    }

    private function 👫($❓)
    {
        if ($❓) {
            return "👫";
        }
        return "😞";
    }

    public function ❓()
    {
        echo "👫🍻❓ 0 : 🙄, 1 : 🆗";
        $❓ = rtrim(fgets(STDIN));
        $👫 = $this->👫($❓);
        echo $👫;
        if ($👫 === "👫") {
            echo $this->🍻();
            echo "💓❓ 0 : 👎, 1 : 👍";
            $👩‍🎤 = rtrim(fgets(STDIN));
            $💋 = $this->💋($👩‍🎤);
            var_dump($💋);
        }
    }
}
