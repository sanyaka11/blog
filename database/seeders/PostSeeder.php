<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id', 'title');
        $tags = Tag::pluck('id', 'title');

        $posts = [
            [
                'title' => 'Raspberry Swirl Cheesecake Bars',
                'description' => "While I’m not from a cheesecake family — it is never unwelcome, but we are more deeply devoted to things like pastry creams, chocolate pudding, and stellar coffee cakes — I married into one, which means that even though this site’s cheesecake archives are very well-populated, not a single peep of protest could be heard as far as my apartment walls reach (to be fair, a short distance) as I tinkered with these bars over the last few weeks.",
                'content' => "While I’m not from a cheesecake family — it is never unwelcome, but we are more deeply devoted to things like pastry creams, chocolate pudding, and stellar coffee cakes — I married into one, which means that even though this site’s cheesecake archives are very well-populated, not a single peep of protest could be heard as far as my apartment walls reach (to be fair, a short distance) as I tinkered with these bars over the last few weeks.

                It doesn’t hurt that they’re as pretty as the explosion of peonies that co-starred in this week’s photoshoot. They remind me of tie-dye, marble countertops, and wisps of smoke, yet require no cheffy brilliance to pull off — just a bag and a toothpick. But unlike baked goods where a flawless veneer makes me suspicious they’ll overpromise and underdeliver, these taste like the best of everything: a gently lemony, perfectly creamy, dead simple cheesecake layer swirled with a sweet-tart puree on a buttery graham crust. Or, a berry and cheese danish formatted as a picnic/potluck/party-ready bar. I hope you get to make them (or get someone to make them for you) as soon as possible.",
                'category' => 'Recipes',
                'tags' => ['cheesecake', 'raspberry', 'bars', 'dessert'],
                'thumbnail' => 'images/2026-05-19/raspberry-swirl-cheesecake-bars-12-scaled.png',
                'created_at' => Carbon::create(2026, 5, 8, 14, 0, 0),
            ],
            [
                'title' => 'Sidecar',
                'description' => "If there’s anything that’s been consistent about this site in its near-20 years of beaming (babbling?) hypertext to servers and back to you, it’s that I’m very bossy when I get into something new, especially cocktails. When I fell in love with Porch Swings, I wanted you to as well. Ditto for Blood Orange Margaritas (but only when in season), a Perfect Manhattan era that spanned over a decade, Boulevardier that has been woven into almost every year since, and a Slushy Paper Plane phase last year. This past winter and spring still, it’s been Sidecars, 1920s-era cocktails with about as many conflicting stories as my kids regale us with when they didn’t do their homework.",
                'content' => "If there’s anything that’s been consistent about this site in its near-20 years of beaming (babbling?) hypertext to servers and back to you, it’s that I’m very bossy when I get into something new, especially cocktails. When I fell in love with Porch Swings, I wanted you to as well. Ditto for Blood Orange Margaritas (but only when in season), a Perfect Manhattan era that spanned over a decade, Boulevardier that has been woven into almost every year since, and a Slushy Paper Plane phase last year. This past winter and spring still, it’s been Sidecars, 1920s-era cocktails with about as many conflicting stories as my kids regale us with when they didn’t do their homework.
                
                In the one I find the most amusing, an American army captain in World War 1-era Paris would apparently roll up to a bar in a motorcycle sidecar — I have many questions including: who was the driver? — and became a regular at Hôtel Ritz Paris or possibly Harry’s New York Bar, depending on who is telling the story. The captain would order a mix of cognac, orange liqueur, and lemon juice and eventually, bartenders named the drink after his particular vehicular quirk.
                
                In other origin stories, bartenders serve the drink with a little extra leftover from the cocktail shaker poured into a second glass… that they called the sidecar. Again, maybe it’s true, but I’m a skeptic, albeit a bemused one. I’m far more interested in its taste. I saw it referred to as the French cousin of a margarita, and honestly, I get it — it’s strong (from cognac), bright (from lemon), and slightly sweet (from orange liqueur) but balanced, as daisy drinks often are. Typically the sidecar is served with a sugared rim which I find completely unnecessary for taste (it is sweet enough) but cannot resist the way raw sugar gets a golden glint to it and include it here. We all need a little extra sparkle sometimes, right?",
                'category' => 'Cocktails',
                'tags' => ['cocktail', 'sidecar', 'brandy', 'classic'],
                'thumbnail' => 'images/2026-05-19/sidecar-7-scaled.png',
                'created_at' => Carbon::create(2026, 4, 24, 14, 0, 0),
            ],
            [
                'title' => 'Braised Leeks and Lentils with Arugula and Yogurt',
                'description' => "I’ve been pining for a springy way to combine leeks and lentils in an unfussy, one-pot, weeknight-friendly meal but would get stuck on one thing: how annoying leeks are — and I say this from a place of adoration! I think leeks are one of the most stunning vegetables, an ombre of chromatic ringlets from buttery yellow to pea green and back to a pale shade of lima. They look exactly like spring (even though it’s climatically July outside but will be March again next week), and taste even better: Oniony but not harsh and silky, wonderful, and a little sweet when braised. They should be everywhere, but first we need to address the fact that if you go to the store or market for a bundle of leeks right now, you have no idea how much leek you’re getting.",
                'content' => "I’ve been pining for a springy way to combine leeks and lentils in an unfussy, one-pot, weeknight-friendly meal but would get stuck on one thing: how annoying leeks are — and I say this from a place of adoration! I think leeks are one of the most stunning vegetables, an ombre of chromatic ringlets from buttery yellow to pea green and back to a pale shade of lima. They look exactly like spring (even though it’s climatically July outside but will be March again next week), and taste even better: Oniony but not harsh and silky, wonderful, and a little sweet when braised. They should be everywhere, but first we need to address the fact that if you go to the store or market for a bundle of leeks right now, you have no idea how much leek you’re getting.
                
                Here comes the side rant: A “bundle” could be two leeks, or it could be four. They could be the thickest, sandiest beast leeks with barely two to three inches of the white/pale green parts most recipes call for, or they could look like photos, with slimmer stalks full of usable parts. How can one write a recipe when the volume might end up being anywhere from 1 to 4 cups due to produce roulette? Weight, the most reliable way to buy almost any other ingredient, is also useless in providing guidance, as this is about the variable fraction of the vegetable that’s usable, and this cannot be weighed at the store.
                
                [I just said “variable fraction of the vegetable that’s usable.” I, too, am amazed I have any friends.]
                
                My solution here is to write a recipe that simply doesn’t care how much leek you have; it’s going to work regardless. You brown thick rings of however much leek your leeks yielded in olive oil in a pan* and then keep them there, adding garlic, a heap of scallions, lemon zest, broth, and dried lentils. Bring it to a simmer, transfer it to the oven to finish cooking (40 to 45 minutes) and in the meanwhile, make yourself a bowl of yogurt sauce with lemon juice and garlic, and an overdressed arugula salad, enough that there’s runoff below the greens. You can eat the finished dish right from the pot, dolloping it with the yogurt, piling the greens on top, and using the dressing run-off to give the lentils extra zip, or you can pile it on a plate. My plate starts with a piece of sourdough fried in olive oil; it’s great for pushing it all together and scooping it up. Together, this dish hits all of the notes for me — a warming pot of legumes but also a salad, all really simple with a short ingredient list, and perfect-when-reheated leftovers. I hope you get obsessed with it too.
                
                * Am I using the new pink peony Staub x Smitten Kitchen Braiser in an effort to entice the pink-obsessed, lentil-resistant 10-year-old who lives with me? Of course I am. Did it work? Bwahaha…",
                'category' => 'Vegan & Vegetarian',
                'tags' => ['leeks', 'lentils', 'braised', 'yogurt'],
                'thumbnail' => 'images/2026-05-19/braised-leeks-and-lentils-12-scaled.png',
                'created_at' => Carbon::create(2026, 4, 16, 14, 0, 0),
            ],
            [
                'title' => 'Black Bean Confetti Salad 2.0',
                'description' => "I was in Paris* last week — no, I cannot believe I get to utter sentences like that so casually, either, pinch me — and it was really, truly, and surprisingly spring. The magnolia trees at the Jardin du Palais Royal supplied us with a lace curtain of fluttering pink shadows, the daffodils and hyacinth were popping up from the ground like they’d missed us, and everyone was outside and stayed out until after midnight and this energy climbed inside me, evicted all of the seasonal malaise (turned out I was just cold!), and I did my best to bring all of this warmth and joy back to NYC with me. And despite the fact that my grouchy (sorry, “weathered”) friends tried to warn me that we were experiencing a “false spring” and “don’t fall for it,” la la la, I said, it is spring in my heart now — and in my kitchen, and busted out a warm weather salad. Which is to say: I’m sorry, this sudden cold spell might be my fault.",
                'content' => "I was in Paris* last week — no, I cannot believe I get to utter sentences like that so casually, either, pinch me — and it was really, truly, and surprisingly spring. The magnolia trees at the Jardin du Palais Royal supplied us with a lace curtain of fluttering pink shadows, the daffodils and hyacinth were popping up from the ground like they’d missed us, and everyone was outside and stayed out until after midnight and this energy climbed inside me, evicted all of the seasonal malaise (turned out I was just cold!), and I did my best to bring all of this warmth and joy back to NYC with me. And despite the fact that my grouchy (sorry, “weathered”) friends tried to warn me that we were experiencing a “false spring” and “don’t fall for it,” la la la, I said, it is spring in my heart now — and in my kitchen, and busted out a warm weather salad. Which is to say: I’m sorry, this sudden cold spell might be my fault.
                
                Longtime readers might recognize this as an update to one of the earliest salads on this site. The black bean confetti salad has never left my repertoire, but these days, I love hitting it with more more more: avocado, radishes, and just so much lime juice. I’ve traded cumin for tajín (or your favorite chili powder) and made peace with cilantro. And these days, I cannot resist making it with one of these chopper gadgets (which, funny enough, I also owned in 2006 but rarely used then; perhaps I had more free time?) for geometrically pleasing cubes of vegetable confetti.
                
                I love the way this straddles the line between party snack and lunch. I brought it to a friend’s tamale-making party last fall and felt a dorky maternal pride, knowing I’d sneakily provided us with vegetables, protein, and fiber (to go with our giant pot of queso, for balance and stuff). I make too much and eat it for lunch when I think I don’t have time for lunch. And this week, we piled it on simple quesadillas for dinner. Is there anything this salad cannot do? Bring spring back, perhaps, but do know it’s trying its best.
                
                * I was there to visit the factory where they make the Staub x Smitten Kitchen Braisers. [Watch it here!] Did you know there’s a pink braiser now? My 10 year-old found out and flipped.",
                'category' => 'Salads',
                'tags' => ['black bean', 'salad', 'confetti', 'spring'],
                'thumbnail' => 'images/2026-05-19/black-bean-confetti-salad-v.2-7-scaled.png',
                'created_at' => Carbon::create(2026, 3, 13, 14, 0, 0),
            ],
            [
                'title' => 'Haricot Vert with Shallots',
                'description' => "Nearly a year ago, I told you about my favorite side dish. But what I failed to tell you is that these things change suddenly for no apparent reason. One day I’ll try something I’m certain sounds too uninteresting to be executed well–in that case, zucchini, almonds and a bit of parmesan, barely cooked–and the flavor blows my mind to the point that I must eat it that night, the next one and all the days that follow, then pausing for a couple weeks just to pick it up once more.",
                'content' => "Nearly a year ago, I told you about my favorite side dish. But what I failed to tell you is that these things change suddenly for no apparent reason. One day I’ll try something I’m certain sounds too uninteresting to be executed well–in that case, zucchini, almonds and a bit of parmesan, barely cooked–and the flavor blows my mind to the point that I must eat it that night, the next one and all the days that follow, then pausing for a couple weeks just to pick it up once more.
                
                Well, it has happened again. Two weeks ago, Alex and I got home late from the gym and decided to order salads from the French diner-ish place a couple blocks away, but I suddenly became worried that my salad would not be enough food and threw in a side of haricot vert, or those skinny French green beans I love so much. Nevertheless, my expectations were very low–I mean, you’ve got to cook these guys to a very specific point and then stop, and I failed to see how that would work when they needed to arrive warm.
                
                Yet here we are, two weeks later and this is the third or fourth time I’ve eaten them since. However, last night was the first time I got off my rump long enough to assemble it myself, which if you consider how ridiculously simple this is to make, is particularly sad.
                
                Or wouldn’t be if it weren’t so damned tasty. I mean, I’m drinking my morning coffee right now and I kind of wish I had more. Who knew that green beans, a bit of butter, a squeeze of lemon juice, a shallot and some diced tomatoes could be so colossally addictive?",
                'category' => 'Side Dishes',
                'tags' => ['green beans', 'haricot vert', 'shallots'],
                'thumbnail' => 'images/2026-05-19/haricot-vert-with-shallots-scaled.png',
                'created_at' => Carbon::create(2008, 5, 29, 14, 0, 0),
            ],
        ];

        foreach ($posts as $postData) {
            $categoryId = $categories[$postData['category']] ?? null;
            if (!$categoryId) {
                continue;
            }

            $post = Post::updateOrCreate(
                ['slug' => Str::slug($postData['title'])],
                [
                    'title' => $postData['title'],
                    'description' => $postData['description'],
                    'content' => $postData['content'],
                    'category_id' => $categoryId,
                    'thumbnail' => $postData['thumbnail'],
                    'views' => rand(100, 5000),
                    'created_at' => $postData['created_at'],
                    'updated_at' => $postData['created_at'],
                ]
            );

            $tagIds = [];
            foreach ($postData['tags'] as $tagTitle) {
                if (isset($tags[$tagTitle])) {
                    $tagIds[] = $tags[$tagTitle];
                }
            }
            $post->tags()->sync($tagIds);
        }
    }
}