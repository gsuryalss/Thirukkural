<?php
/**
 * @package Thirukkural_QuoteWidget
 * @version 1.0
 */

/**
 * Plugin Name: Daily Quotes Kural
 * Plugin URI: https://github.com/gsuryalss/Thirukkural
 * Description: A widget to display random Thirukkural (classical Tamil couplets) quotes over the website.
 * Author: Surya
 * Author URI: https://github.com/gsuryalss/
 * Version: 1.0
 */

 /*
 TIRUKKURAL
 English Translation and Commentary
 by
 Rev Dr G U Pope,
 Rev W H Drew,
 Rev John Lazarus and Mr F W Ellis
 First published by W.H. Allen, & Co, 1886,
 Reprinted by The South India Saiva Siddhantha Works Publishing Society,
 Tinnevelly, Madras, India , 1962, 1982.
 pdf file preparation: Dr. K. Kalyanasundaram, Lausanne, Switzerland
  Project Madurai is an open, voluntary, worldwide initiative devoted
 to preparation of electronic texts of Tamil literary works and
 to distribute them free on the Internet.
 © Project Madurai 2002
  Details of Project Madurai are available at the website <www.projectmadurai.org>.
 You are welcome to freely distribute this file, provided this header page is kept intact.
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly.
 }

// initialize localisation.
 //load_plugin_textdomain( 'Thirukkural', false, dirname( plugin_basename( __FILE__ ) ) . '/i18n/' );

// contains quotes data
function get_Thirukkural($index) {

    $ThirukkuralQuotes = array(

      // PART I. VIRTUE
      // 1.1 Introduction
      // 1.1.1 The Praise of God
      __("1.
      A, as its first of letters, every speech maintains;
      The \"Primal Deity\" is first through all the world's domains.
      <br><b>Exp:</b> As the letter A is the first of all letters, so the eternal God is first in the world.","Thirukkural"),
      __("2.
      No fruit have men of all their studied lore,
      Save they the 'Purely Wise One's' feet adore.
      <br><b>Exp:</b> What Profit have those derived from learning, who worship not the good feet of Him who is possessed of pure knowledge ?","Thirukkural"),
      __("3.
      His feet, 'Who o'er the full-blown flower hath past,' who gain
      In bliss long time shall dwell above this earthly plain.
      <br><b>Exp:</b> They who are united to the glorious feet of Him who passes swiftly over the flower of the mind, shall flourish long above all worlds.","Thirukkural"),
      __("4.
      His foot, 'Whom want affects not, irks not grief,' who gain
      Shall not, through every time, of any woes complain.
      <br><b>Exp:</b> To those who meditate the feet of Him who is void of desire or aversion, evil shall never come.","Thirukkural"),
      __("5.
      The men, who on the 'King's' true praised delight to dwell,
      Affects not them the fruit of deeds done ill or well.
      <br><b>Exp:</b> The two-fold deeds that spring from darkness shall not adhere to those who delight in the true praise of God.","Thirukkural"),
      __("6
      Long live they blest, who 've stood in path from falsehood freed;
      His, 'Who quenched lusts that from the sense-gates five proceed'.
      <br><b>Exp:</b> Those shall long proposer who abide in the faultless way of Him who has destroyed the five desires of the senses.","Thirukkural"),
      __("7.
      Unless His foot, 'to Whom none can compare,' men gain,
      'Tis hard for mind to find relief from anxious pain.
      <br><b>Exp:</b> Anxiety of mind cannot be removed, except from those who are united to the feet of Him who is
      incomparable.","Thirukkural"),
      __("8.
      Unless His feet 'the Sea of Good, the Fair and Bountiful,' men gain,
      'Tis hard the further bank of being's changeful sea to attain.
      <br><b>Exp:</b> None can swim the sea of vice, but those who are united to the feet of that gracious Being who is a sea of virtue.","Thirukkural"),
      __("9.
      Before His foot, 'the Eight-fold Excellence,' with unbent head,
      Who stands, like palsied sense, is to all living functions dead.
      <br><b>Exp:</b> The head that worships not the feet of Him who is possessed of eight attributes, is as useless as a sense without the power of sensation.","Thirukkural"),
      __("10.
      They swim the sea of births, the 'Monarch's' foot who gain;
      None others reach the shore of being's mighty main.
      <br><b>Exp:</b> None can swim the great sea of births but those who are united to the feet of God.","Thirukkural"),

       //1.1.2. The Excellence of Rain

      __("11.
      The world its course maintains through life that rain unfailing gives;
      Thus rain is known the true ambrosial food of all that lives.
      <br><b>Exp:</b> By the continuance of rain the world is preserved in existence; it is therefore worthy to be called ambrosia.","Thirukkural"),
      __("12.
      The rain makes pleasant food for eaters rise;
      As food itself, thirst-quenching draught supplies.
      <br><b>Exp:</b> Rain produces good food, and is itself food.","Thirukkural"),
      __("13.
      If clouds, that promised rain, deceive, and in the sky remain,
      Famine, sore torment, stalks o'er earth's vast ocean-girdled plain.
      <br><b>Exp:</b> If the cloud, withholding rain, deceive (our hopes) hunger will long distress the sea-girt spacious world.","Thirukkural"),
      __("14.
      If clouds their wealth of waters fail on earth to pour,
      The ploughers plough with oxen's sturdy team no more.
      <br><b>Exp:</b> If the abundance of wealth imparting rain diminish, the labour of the plough must cease.","Thirukkural"),
      __("15.
      'Tis rain works all: it ruin spreads, then timely aid supplies;
      As, in the happy days before, it bids the ruined rise.
      <br><b>Exp:</b> Rain by its absence ruins men; and by its existence restores them to fortune.","Thirukkural"),
      __("16.
      If from the clouds no drops of rain are shed.
      'Tis rare to see green herb lift up its head.
      <br><b>Exp:</b> If no drop falls from the clouds, not even the green blade of grass will be seen.","Thirukkural"),
      __("17.
      If clouds restrain their gifts and grant no rain,
      The treasures fail in ocean's wide domain.
      <br><b>Exp:</b> Even the wealth of the wide sea will be diminished, if the cloud that has drawn (its waters) up gives them not back again (in rain).","Thirukkural"),
      __("18.
      If heaven grow dry, with feast and offering never more,
      Will men on earth the heavenly ones adore.
      <br><b>Exp:</b> If the heaven dry up, neither yearly festivals, nor daily worship will be offered in this world, to the celestials.","Thirukkural"),
      __("19.
      If heaven its watery treasures ceases to dispense,
      Through the wide world cease gifts, and deeds of 'penitence'.
      <br><b>Exp:</b> If rain fall not, penance and alms-deeds will not dwell within this spacious world.","Thirukkural"),
      __("20
      When water fails, functions of nature cease, you say;
      Thus when rain fails, no men can walk in 'duty's ordered way'.
      <br><b>Exp:</b> If it be said that the duties of life cannot be discharged by any person without water, so without rain there cannot be the flowing of water.","Thirukkural"),

      // 1.1.3. The Greatness of Ascetics

      __("21.
      The settled rule of every code requires, as highest good,
      Their greatness who, renouncing all, true to their rule have stood.
      <br><b>Exp:</b> The end and aim of all treatise is to extol beyond all other excellence, the greatness of those who,
      while abiding in the rule of conduct peculiar to their state, have abandoned all desire.","Thirukkural"),
      __("22.
      As counting those that from the earth have passed away,
      'Tis vain attempt the might of holy men to say.
      <br><b>Exp:</b> To describe the measure of the greatness of those who have forsaken the two-fold desires, is like counting the dead.","Thirukkural"),
      __("23.
      Their greatness earth transcends, who, way of both worlds weighed,
      In this world take their stand, in virtue's robe arrayed.
      <br><b>Exp:</b> The greatness of those who have discovered the properties of both states of being, and renounced the world, shines forth on earth (beyond all others).","Thirukkural"),
      __("24.
      He, who with firmness, curb the five restrains,
      Is seed for soil of yonder happy plains.
      <br><b>Exp:</b> He who guides his five senses by the hook of wisdom will be a seed in the world of heaven.","Thirukkural"),
      __("25.
      Their might who have destroyed 'the five', shall soothly tell
      Indra, the lord of those in heaven's wide realms that dwell.
      <br><b>Exp:</b> Indra, the king of the inhabitants of the spacious heaven, is himself, a sufficient proof of the strength of him who has subdued his five senses.","Thirukkural"),
      __("26.
      Things hard in the doing will great men do;
      Things hard in the doing the mean eschew.
      <br><b>Exp:</b> The great will do those things which is difficult to be done; but the mean cannot do them.","Thirukkural"),
      __("27.
      Taste, light, touch, sound, and smell: who knows the way
      Of all the five,- the world submissive owns his sway.
      <br><b>Exp:</b> The world is within the knowledge of him who knows the properties of taste, sight, touch, hearing and smell.","Thirukkural"),
      __("28.
      The might of men whose word is never vain,
      The 'secret word' shall to the earth proclaim.
      <br><b>Exp:</b> The hidden words of the men whose words are full of effect, will shew their greatness to the world.","Thirukkural"),
      __("29.
      The wrath 'tis hard e'en for an instant to endure,
      Of those who virtue's hill have scaled, and stand secure.
      <br><b>Exp:</b> The anger of those who have ascended the mountain of goodness, though it continue but for a
      moment, cannot be resisted.","Thirukkural"),
      __("30.
      Towards all that breathe, with seemly graciousness adorned they live;
      And thus to virtue's sons the name of 'Anthanar' men give.
      <br><b>Exp:</b> The virtuous are truly called Anthanar; because in their conduct towards all creatures they are
      clothed in kindness.","Thirukkural"),

      // 1.1.4. Assertion of the Strength of Virtue

      __("31.
      It yields distinction, yields prosperity; what gain
      Greater than virtue can a living man obtain?
      <br><b>Exp:</b> Virtue will confer heaven and wealth; what greater source of happiness can man possess ?","Thirukkural"),
      __("32.
      No greater gain than virtue aught can cause;
      No greater loss than life oblivious of her laws.
      <br><b>Exp:</b> There can be no greater source of good than (the practice of) virtue; there can be no greater source of evil than the forgetfulness of it.","Thirukkural"),
      __("33.
      To finish virtue's work with ceaseless effort strive,
      What way thou may'st, where'er thou see'st the work may thrive.
      <br><b>Exp:</b> As much as possible, in every way, incessantly practise virtue.","Thirukkural"),
      __("34.
      Spotless be thou in mind! This only merits virtue's name;
      All else, mere pomp of idle sound, no real worth can claim.
      <br><b>Exp:</b> Let him who does virtuous deeds be of spotless mind; to that extent is virtue; all else is vain show.","Thirukkural"),
      __("35.
      'Tis virtue when, his footsteps sliding not through envy, wrath,
      Lust, evil speech-these four, man onwards moves in ordered path.
      <br><b>Exp:</b> That conduct is virtue which is free from these four things, viz, malice, desire, anger and bitter speech.","Thirukkural"),
      __("36.
      Do deeds of virtue now. Say not, 'To-morrow we'll be wise';
      Thus, when thou diest, shalt thou find a help that never dies.
      <br><b>Exp:</b> Defer not virtue to another day; receive her now; and at the dying hour she will be your undying friend.","Thirukkural"),
      __("37.
      Needs not in words to dwell on virtue's fruits: compare
      The man in litter borne with them that toiling bear!
      <br><b>Exp:</b> The fruit of virtue need not be described in books; it may be inferred from seeing the bearer of a palanquin and the rider therein.","Thirukkural"),
      __("38.
      If no day passing idly, good to do each day you toil,
      A stone it will be to block the way of future days of moil.
      <br><b>Exp:</b> If one allows no day to pass without some good being done, his conduct will be a stone to block up the passage to other births.","Thirukkural"),
      __("39.
      What from virtue floweth, yieldeth dear delight;
      All else extern, is void of glory's light.
      <br><b>Exp:</b> Only that pleasure which flows from domestic virtue is pleasure; all else is not pleasure, and it is without praise.","Thirukkural"),
      __("40.
      'Virtue' sums the things that should be done;
      'Vice' sums the things that man should shun.
      <br><b>Exp:</b> That is virtue which each ought to do, and that is vice which each should shun.","Thirukkural"),

      // 1.2 Domestic Virtue
      // 1.2.1. Domestic Life

      __("41.
      The men of household virtue, firm in way of good, sustain
      The other orders three that rule professed maintain.
      <br><b>Exp:</b> He will be called a (true) householder, who is a firm support to the virtuous of the three orders in their good path.","Thirukkural"),
      __("42.
      To anchorites, to indigent, to those who've passed away,
      The man for household virtue famed is needful held and stay.
      <br><b>Exp:</b> He will be said to flourish in domestic virtue who aids the forsaken, the poor, and the dead.","Thirukkural"),
      __("43.
      The manes, God, guests kindred, self, in due degree,
      These five to cherish well is chiefest charity.
      <br><b>Exp:</b> The chief (duty of the householder) is to preserve the five-fold rule (of conduct) towards the manes, the Gods, his guests, his relations and himself.","Thirukkural"),
      __("44.
      Who shares his meal with other, while all guilt he shuns,
      His virtuous line unbroken though the ages runs.
      <br><b>Exp:</b> His descendants shall never fail who, living in the domestic state, fears vice (in the acquisition of property) and shares his food (with others).","Thirukkural"),
      __("45.
      If love and virtue in the household reign,
      This is of life the perfect grace and gain.
      <br><b>Exp:</b> If the married life possess love and virtue, these will be both its duty and reward.","Thirukkural"),
      __("46.
      If man in active household life a virtuous soul retain,
      What fruit from other modes of virtue can he gain?
      <br><b>Exp:</b> What will he who lives virtuously in the domestic state gain by going into the other, (ascetic) state ?","Thirukkural"),
      __("47.
      In nature's way who spends his calm domestic days,
      'Mid all that strive for virtue's crown hath foremost place.
      <br><b>Exp:</b> Among all those who labour (for future happiness) he is greatest who lives well in the household state.","Thirukkural"),
      __("48.
      Others it sets upon their way, itself from virtue ne'er declines;
      Than stern ascetics' pains such life domestic brighter shines.
      <br><b>Exp:</b> The householder who, not swerving from virtue, helps the ascetic in his way, endures more than
      those who endure penance.","Thirukkural"),
      __("49.
      The life domestic rightly bears true virtue's name;
      That other too, if blameless found, due praise may claim.
      <br><b>Exp:</b> The marriage state is truly called virtue. The other state is also good, if others do not reproach it.","Thirukkural"),
      __("50.
      Who shares domestic life, by household virtues graced,
      Shall, mid the Gods, in heaven who dwell, be placed.
      <br><b>Exp:</b> He who on earth has lived in the conjugal state as he should live, will be placed among the Gods who dwell in heaven.","Thirukkural"),

      // 1.2.2 The Goodness of the Help to Domestic Life

      __("51.
      As doth the house beseem, she shows her wifely dignity;
      As doth her husband's wealth befit, she spends: help - meet is she.
      <br><b>Exp:</b> She who has the excellence of home virtues, and can expend within the means of her husband, is a help in the domestic state.","Thirukkural"),
      __("52.
      If household excellence be wanting in the wife,
      Howe'er with splendour lived, all worthless is the life.
      <br><b>Exp:</b> If the wife be devoid of domestic excellence, whatever (other) greatness be possessed, the conjugal state, is nothing.","Thirukkural"),
      __("53.
      There is no lack within the house, where wife in worth excels,
      There is no luck within the house, where wife dishonoured dwells.
      <br><b>Exp:</b> If his wife be eminent (in virtue), what does (that man) not possess ? If she be without excellence, what does (he) possess ?","Thirukkural"),
      __("54.
      If woman might of chastity retain,
      What choicer treasure doth the world contain?
      <br><b>Exp:</b> What is more excellent than a wife, if she possess the stability of chastity ?","Thirukkural"),
      __("55.
      No God adoring, low she bends before her lord;
      Then rising, serves: the rain falls instant at her word!
      <br><b>Exp:</b> If she, who does not worship God, but who rising worships her husband, say, \"let it rain,\" it will rain.","Thirukkural"),
      __("56.
      Who guards herself, for husband's comfort cares, her household's fame,
      In perfect wise with sleepless soul preserves, -give her a woman's name.
      <br><b>Exp:</b> She is a wife who unweariedly guards herself, takes care of her husband, and preserves an
      unsullied fame.","Thirukkural"),
      __("57.
      Of what avail is watch and ward?
      Honour's woman's safest guard.
      <br><b>Exp:</b> What avails the guard of a prison ? The chief guard of a woman is her chastity.","Thirukkural"),
      __("58.
      If wife be wholly true to him who gained her as his bride,
      Great glory gains she in the world where gods bliss abide.
      <br><b>Exp:</b> If women shew reverence to their husbands, they will obtain great excellence in the world where the gods flourish.","Thirukkural"),
      __("59.
      Who have not spouses that in virtue's praise delight,
      They lion-like can never walk in scorner's sight.
      <br><b>Exp:</b> The man whose wife seeks not the praise (of chastity) cannot walk with lion-like stately step, before those who revile them.","Thirukkural"),
      __("60.
      The house's 'blessing', men pronounce the house-wife excellent;
      The gain of blessed children is its goodly ornament.
      <br><b>Exp:</b> The excellence of a wife is the good of her husband; and good children are the jewels of that
      goodness.","Thirukkural"),

      // 1.2.3. The Obtaining of Sons

      __("61.
      Of all that men acquire, we know not any greater gain,
      Than that which by the birth of learned children men obtain.
      <br><b>Exp:</b> Among all the benefits that may be acquired, we know no greater benefit than the acquisition of
      intelligent children.","Thirukkural"),
      __("62.
      Who children gain, that none reproach, of virtuous worth,
      No evils touch them, through the sev'n-fold maze of birth.
      <br><b>Exp:</b> The evils of the seven births shall not touch those who abtain children of a good disposition, free from vice.","Thirukkural"),
      __("63.
      'Man's children are his fortune,' say the wise;
      From each one's deeds his varied fortunes rise.
      <br><b>Exp:</b> Men will call their sons their wealth, because it flows to them through the deeds which they (sons) perform on their behalf.","Thirukkural"),
      __("64.
      Than God's ambrosia sweeter far the food before men laid,
      In which the little hands of children of their own have play'd.
      <br><b>Exp:</b> The rice in which the little hand of their children has dabbled will be far sweeter (to the parent) than ambrosia.","Thirukkural"),
      __("65.
      To patent sweet the touch of children dear;
      Their voice is sweetest music to his ear.
      <br><b>Exp:</b> The touch of children gives pleasure to the body, and the hearing of their words, pleasure to the ear.","Thirukkural"),
      __("66.
      'The pipe is sweet,' 'the lute is sweet,' by them't will be averred,
      Who music of their infants' lisping lips have never heard.
      <br><b>Exp:</b> \"The pipe is sweet, the lute is sweet,\" say those who have not heard the prattle of their own children.","Thirukkural"),
      __("67.
      Sire greatest boon on son confers, who makes him meet,
      In councils of the wise to fill the highest seat.
      <br><b>Exp:</b> The benefit which a father should confer on his son is to give him precedence in the assembly of the learned.","Thirukkural"),
      __("68.
      Their children's wisdom greater than their own confessed,
      Through the wide world is sweet to every human breast.
      <br><b>Exp:</b> That their children should possess knowledge is more pleasing to all men of this great earth than to themselves.","Thirukkural"),
      __("69
      When mother hears him named 'fulfill'd of wisdom's lore,'
      Far greater joy she feels, than when her son she bore.
      <br><b>Exp:</b> The mother who hears her son called \"a wise man\" will rejoice more than she did at his birth.","Thirukkural"),
      __("70.
      To sire, what best requital can by grateful child be done?
      To make men say, 'What merit gained the father such a son?'
      <br><b>Exp:</b> (So to act) that it may be said \"by what great penance did his father beget him,\" is the benefit which a son should render to his father.","Thirukkural"),

      // 1.2.4. The Possession of Love

      __("71.
      And is there bar that can even love restrain?
      The tiny tear shall make the lover's secret plain.
      <br><b>Exp:</b> Is there any fastening that can shut in love ? Tears of the affectionate will publish the love that is within.","Thirukkural"),
      __("72.
      The loveless to themselves belong alone;
      The loving men are others' to the very bone.
      <br><b>Exp:</b> Those who are destitute of love appropriate all they have to themselves; but those who possess love consider even their bones to belong to others.","Thirukkural"),
      __("73.
      Of precious soul with body's flesh and bone,
      The union yields one fruit, the life of love alone.
      <br><b>Exp:</b> They say that the union of soul and body in man is the fruit of the union of love and virtue (in a former birth).","Thirukkural"),
      __("74.
      From love fond yearning springs for union sweet of minds;
      And that the bond of rare excelling friendship binds.
      <br><b>Exp:</b> Love begets desire: and that (desire) begets the immeasureable excellence of friendship.","Thirukkural"),
      __("75
      Sweetness on earth and rarest bliss above,
      These are the fruits of tranquil life of love.
      <br><b>Exp:</b> They say that the felicity which those who, after enjoying the pleasure (of the conjugal state) in this world, obtain in heaven is the result of their domestic state imbued with love.","Thirukkural"),
      __("76.
      The unwise deem love virtue only can sustain,
      It also helps the man who evil would restrain.
      <br><b>Exp:</b> The ignorant say that love is an ally to virtue only, but it is also a help to get out of vice.","Thirukkural"),
      __("77,
      As sun's fierce ray dries up the boneless things,
      So loveless beings virtue's power to nothing brings.
      <br><b>Exp:</b> Virtue will burn up the soul which is without love, even as the sun burns up the creature which is without bone, i.e. worms.","Thirukkural"),
      __("78.
      The loveless soul, the very joys of life may know,
      When flowers, in barren soil, on sapless trees, shall blow.
      <br><b>Exp:</b> The domestic state of that man whose mind is without love is like the flourishing of a withered tree upon the parched desert.","Thirukkural"),
      __("79.
      Though every outward part complete, the body's fitly framed;
      What good, when soul within, of love devoid, lies halt and maimed?
      <br><b>Exp:</b> Of what avail are all the external members (of the body) to those who are destitute of love, the internal member.","Thirukkural"),
      __("80.
      Bodies of loveless men are bony framework clad with skin;
      Then is the body seat of life, when love resides within.
      <br><b>Exp:</b> That body alone which is inspired with love contains a living soul: if void of it, (the body) is bone overlaid with skin.","Thirukkural"),

      // 1.2.5 Cherishing Guests

      __("81.
      All household cares and course of daily life have this in view.
      Guests to receive with courtesy, and kindly acts to do.
      <br><b>Exp:</b> The whole design of living in the domestic state and laying up (property) is (to be able) to exercise the benevolence of hospitality.","Thirukkural"),
      __("82.
      Though food of immortality should crown the board,
      Feasting alone, the guests without unfed, is thing abhorred.
      <br><b>Exp:</b> It is not fit that one should wish his guests to be outside (his house) even though he were eating the food of immortality.","Thirukkural"),
      __("83.
      Each day he tends the coming guest with kindly care;
      Painless, unfailing plenty shall his household share.
      <br><b>Exp:</b> The domestic life of the man that daily entertains the guests who come to him shall not be laid waste by poverty.","Thirukkural"),
      __("84.
      With smiling face he entertains each virtuous guest,
      'Fortune' with gladsome mind shall in his dwelling rest.
      <br><b>Exp:</b> Lakshmi with joyous mind shall dwell in the house of that man who, with cheerful countenance,
      entertains the good as guests.","Thirukkural"),
      __("85.
      Who first regales his guest, and then himself supplies,
      O'er all his fields, unsown, shall plenteous harvests rise.
      <br><b>Exp:</b> Is it necessary to sow the field of the man who, having feasted his guests, eats what may remain ?","Thirukkural"),
      __("86.
      The guest arrived he tends, the coming guest expects to see;
      To those in heavenly homes that dwell a welcome guest is he.
      <br><b>Exp:</b> He who, having entertained the guests that have come, looks out for others who may yet come, will be a welcome guest to the inhabitants of heaven.","Thirukkural"),
      __("87.
      To reckon up the fruit of kindly deeds were all in vain;
      Their worth is as the worth of guests you entertain.
      <br><b>Exp:</b> The advantages of benevolence cannot be measured; the measure (of the virtue) of the guests
      (entertained) is the only measure.","Thirukkural"),
      __("88.
      With pain they guard their stores, yet 'All forlorn are we,' they'll cry,
      Who cherish not their guests, nor kindly help supply.
      <br><b>Exp:</b> Those who have taken no part in the benevolence of hospitality shall (at length lament) saying, \"we have laboured and laid up wealth and are now without support.\"","Thirukkural"),
      __("89.
      To turn from guests is penury, though worldly goods abound;
      'Tis senseless folly, only with the senseless found.
      <br><b>Exp:</b> That stupidity which excercises no hospitality is poverty in the midst of wealth. It is the property of the stupid.","Thirukkural"),
      __("90.
      The flower of 'Anicha' withers away, If you do but its fragrance inhale;
      If the face of the host cold welcome convey, The guest's heart within him will fail.
      <br><b>Exp:</b> As the Anicham flower fades in smelling, so fades the guest when the face is turned away.","Thirukkural"),

      // 1.2.6 The Utterance of Pleasant Words

      __("91.
      Pleasant words are words with all pervading love that burn;
      Words from his guileless mouth who can the very truth discern.
      <br><b>Exp:</b> Sweet words are those which imbued with love and free from deceit flow from the mouth of the
      virtuous.","Thirukkural"),
      __("92.
      A pleasant word with beaming smile's preferred,
      Even to gifts with liberal heart conferred.
      <br><b>Exp:</b> Sweet speech, with a cheerful countenance is better than a gift made with a joyous mind.","Thirukkural"),
      __("93.
      With brightly beaming smile, and kindly light of loving eye,
      And heart sincere, to utter pleasant words is charity.
      <br><b>Exp:</b> Sweet speech, flowing from the heart (uttered) with a cheerful countenance and a sweet look, is true virtue.","Thirukkural"),
      __("94.
      The men of pleasant speech that gladness breathe around,
      Through indigence shall never sorrow's prey be found.
      <br><b>Exp:</b> Sorrow-increasing poverty shall not come upon those who use towards all, pleasure-increasing
      sweetness of speech.","Thirukkural"),
      __("95.
      Humility with pleasant speech to man on earth,
      Is choice adornment; all besides is nothing worth.
      <br><b>Exp:</b> Humility and sweetness of speech are the ornaments of man; all others are not (ornaments).","Thirukkural"),
      __("96.
      Who seeks out good, words from his lips of sweetness flow;
      In him the power of vice declines, and virtues grow.
      <br><b>Exp:</b> If a man, while seeking to speak usefully, speaks also sweetly, his sins will diminish and his virtue increase.","Thirukkural"),
      __("97.
      The words of sterling sense, to rule of right that strict adhere,
      To virtuous action prompting, blessings yield in every sphere.
      <br><b>Exp:</b> That speech which, while imparting benefits ceases not to please, will yield righteousness (for this world) and merit (for the next world).","Thirukkural"),
      __("98.
      Sweet kindly words, from meanness free, delight of heart,
      In world to come and in this world impart.
      <br><b>Exp:</b> Sweet speech, free from harm to others, will give pleasure both in this world and in the next.","Thirukkural"),
      __("99.
      Who sees the pleasure kindly speech affords,
      Why makes he use of harsh, repellant words?
      <br><b>Exp:</b> Why does he use harsh words, who sees the pleasure which sweet speech yields ?","Thirukkural"),
      __("100.
      When pleasant words are easy, bitter words to use,
      Is, leaving sweet ripe fruit, the sour unripe to choose.
      <br><b>Exp:</b> To say disagreeable things when agreeable are at hand is like eating unripe fruit when there is ripe.","Thirukkural"),

      // 1.2.7 The Knowledge of Benefits Conferred: Gratitude

      __("101.
      Assistance given by those who ne'er received our aid,
      Is debt by gift of heaven and earth but poorly paid.
      <br><b>Exp:</b> (The gift of) heaven and earth is not an equivalent for a benefit which is conferred where none had been received.","Thirukkural"),
      __("102.
      A timely benefit, -though thing of little worth,
      The gift itself, -in excellence transcends the earth.
      <br><b>Exp:</b> A favour conferred in the time of need, though it be small (in itself), is (in value) much larger than the world.","Thirukkural"),
      __("103.
      Kindness shown by those who weigh not what the return may be:
      When you ponder right its merit, 'Tis vaster than the sea.
      <br><b>Exp:</b> If we weigh the excellence of a benefit which is conferred without weighing the return, it is larger than the sea.","Thirukkural"),
      __("104.
      Each benefit to those of actions' fruit who rightly deem,
      Though small as millet-seed, as palm-tree vast will seem.
      <br><b>Exp:</b> Though the benefit conferred be as small as a millet seed, those who know its advantage will consider it as large as a palmyra fruit.","Thirukkural"),
      __("105.
      The kindly aid's extent is of its worth no measure true;
      Its worth is as the worth of him to whom the act you do.
      <br><b>Exp:</b> The benefit itself is not the measure of the benefit; the worth of those who have received it is its measure.","Thirukkural"),
      __("106.
      Kindness of men of stainless soul remember evermore!
      Forsake thou never friends who were thy stay in sorrow sore!
      <br><b>Exp:</b> Forsake not the friendship of those who have been your staff in adversity. Forget not be benevolence of the blameless.","Thirukkural"),
      __("107.
      Through all seven worlds, in seven-fold birth, Remains in mem'ry of the wise.
      Friendship of those who wiped on earth, The tears of sorrow from their eyes.
      <br><b>Exp:</b> (The wise) will remember throughout their seven-fold births the love of those who have wiped away their affliction.","Thirukkural"),
      __("108.
      'Tis never good to let the thought of good things done thee pass away;
      Of things not good, 'tis good to rid thy memory that very day.
      <br><b>Exp:</b> It is not good to forget a benefit; it is good to forget an injury even in the very moment (in which it is inflicted).","Thirukkural"),
      __("109.
      Effaced straightway is deadliest injury,
      By thought of one kind act in days gone by.
      <br><b>Exp:</b> Though one inflict an injury great as murder, it will perish before the thought of one benefit (formerly) conferred.","Thirukkural"),
      __("110.
      Who every good have killed, may yet destruction flee;
      Who 'benefit' has killed, that man shall ne'er 'scape free!
      <br><b>Exp:</b> He who has killed every virtue may yet escape; there is no escape for him who has killed a benefit.","Thirukkural"),

      // 1.2.8 Impartiality

      __("111.
      If justice, failing not, its quality maintain,
      Giving to each his due, -'tis man's one highest gain.
      <br><b>Exp:</b> That equity which consists in acting with equal regard to each of (the three) divisions of men
      [enemies, strangers and friends] is a pre-eminent virtue.","Thirukkural"),
      __("112.
      The just man's wealth unwasting shall endure,
      And to his race a lasting joy ensure.
      <br><b>Exp:</b> The wealth of the man of rectitude will not perish, but will bring happiness also to his posterity.","Thirukkural"),
      __("113.
      Though only good it seem to give, yet gain
      By wrong acquired, not e'en one day retain!
      <br><b>Exp:</b> Forsake in the very moment (of acquisition) that gain which, though it should bring advantage, is without equity.","Thirukkural"),
      __("114.
      Who just or unjust lived shall soon appear:
      By each one's offspring shall the truth be clear.
      <br><b>Exp:</b> The worthy and unworthy may be known by the existence or otherwise of good offsprings.","Thirukkural"),
      __("115.
      The gain and loss in life are not mere accident;
      Just mind inflexible is sages' ornament.
      <br><b>Exp:</b> Loss and gain come not without cause; it is the ornament of the wise to preserve evenness of mind (under both).","Thirukkural"),
      __("116.
      If, right deserting, heart to evil turn,
      Let man impending ruin's sign discern!
      <br><b>Exp:</b> Let him whose mind departing from equity commits sin well consider thus within himself, \"I shall perish.\"","Thirukkural"),
      __("117.
      The man who justly lives, tenacious of the right,
      In low estate is never low to wise man's sight.
      <br><b>Exp:</b> The great will not regard as poverty the low estate of that man who dwells in the virtue of equity.","Thirukkural"),
      __("118.
      To stand, like balance-rod that level hangs and rightly weighs,
      With calm unbiassed equity of soul, is sages' praise.
      <br><b>Exp:</b> To incline to neither side, but to rest impartial as the even-fixed scale is the ornament of the wise.","Thirukkural"),
      __("119.
      Inflexibility in word is righteousness,
      If men inflexibility of soul possess.
      <br><b>Exp:</b> Freedom from obliquity of speech is rectitude, if there be (corresponding) freedom from bias of mind.","Thirukkural"),
      __("120.
      As thriving trader is the trader known,
      Who guards another's interests as his own.
      <br><b>Exp:</b> The true merchandize of merchants is to guard and do by the things of others as they do by their own.","Thirukkural"),

      // 1.2.9 The Possession of Self-restraint

      __("121.
      Control of self does man conduct to bliss th' immortals share;
      Indulgence leads to deepest night, and leaves him there.
      <br><b>Exp:</b> Self-control will place (a man) among the Gods; the want of it will drive (him) into the thickest darkness (of hell).","Thirukkural"),
      __("122.
      Guard thou as wealth the power of self-control;
      Than this no greater gain to living soul!
      <br><b>Exp:</b> Let self-control be guarded as a treasure; there is no greater source of good for man than that.","Thirukkural"),
      __("123.
      If versed in wisdom's lore by virtue's law you self restrain.
      Your self-repression known will yield you glory's gain.
      <br><b>Exp:</b> Knowing that self-control is knowledge, if a man should control himself, in the prescribed course, such self-control will bring him distinction among the wise.","Thirukkural"),
      __("124.
      In his station, all unswerving, if man self subdue,
      Greater he than mountain proudly rising to the view.
      <br><b>Exp:</b> More lofty than a mountain will be the greatness of that man who without swerving from his domestic state, controls himself.","Thirukkural"),
      __("125.
      To all humility is goodly grace; but chief to them
      With fortune blessed, -'tis fortune's diadem.
      <br><b>Exp:</b> Humility is good in all; but especially in the rich it is (the excellence of) higher riches.","Thirukkural"),
      __("126.
      Like tortoise, who the five restrains
      In one, through seven world bliss obtains.
      <br><b>Exp:</b> Should one throughout a single birth, like a tortoise keep in his five senses, the fruit of it will prove a safe-guard to him throughout the seven-fold births.","Thirukkural"),
      __("127.
      Whate'er they fail to guard, o'er lips men guard should keep;
      If not, through fault of tongue, they bitter tears shall weep.
      <br><b>Exp:</b> Whatever besides you leave unguarded, guard your tongue; otherwise errors of speech and the
      consequent misery will ensue.","Thirukkural"),
      __("128.
      Though some small gain of good it seem to bring,
      The evil word is parent still of evil thing.
      <br><b>Exp:</b> If a man's speech be productive of a single evil, all the good by him will be turned into evil.","Thirukkural"),
      __("129.
      In flesh by fire inflamed, nature may thoroughly heal the sore;
      In soul by tongue inflamed, the ulcer healeth never more.
      <br><b>Exp:</b> The wound which has been burnt in by fire may heal, but a wound burnt in by the tongue will never heal.","Thirukkural"),
      __("130.
      Who learns restraint, and guards his soul from wrath,
      Virtue, a timely aid, attends his path.
      <br><b>Exp:</b> Virtue, seeking for an opportunity, will come into the path of that man who, possessed of learning and self-control, guards himself against anger.","Thirukkural"),

      // 1.2.10 The Possession of Decorum

      __("131.
      'Decorum' gives especial excellence; with greater care
      'Decorum' should men guard than life, which all men share.
      <br><b>Exp:</b> Propriety of conduct leads to eminence, it should therefore be preserved more carefully than life.","Thirukkural"),
      __("132.
      Searching, duly watching, learning, 'decorum' still we find;
      Man's only aid; toiling, guard thou this with watchful mind.
      <br><b>Exp:</b> Let propriety of conduct be laboriously preserved and guarded; though one know and practise and
      excel in many virtues, that will be an eminent aid.","Thirukkural"),
      __("133.
      'Decorum's' true nobility on earth;
      'Indecorum's' issue is ignoble birth.
      <br><b>Exp:</b> Propriety of conduct is true greatness of birth, and impropriety will sink into a mean birth.","Thirukkural"),
      __("134.
      Though he forget, the Brahman may regain his Vedic lore;
      Failing in 'decorum due,' birthright's gone for evermore.
      <br><b>Exp:</b> A Brahman though he should forget the Vedas may recover it by reading; but, if he fail in propriety of conduct even his high birth will be destroyed.","Thirukkural"),
      __("135.
      The envious soul in life no rich increase of blessing gains,
      So man of 'due decorum' void no dignity obtains.
      <br><b>Exp:</b> Just as the envious man will be without wealth, so will the man of destitute of propriety of conduct be without greatness.","Thirukkural"),
      __("136.
      The strong of soul no jot abate of 'strict decorum's' laws,
      Knowing that 'due decorum's' breach foulest disgrace will cause.
      <br><b>Exp:</b> Those firm in mind will not slacken in their observance of the proprieties of life, knowing, as they do, the misery that flows from the transgression from them.","Thirukkural"),
      __("137.
      'Tis source of dignity when 'true decorum' is preserved;
      Who break 'decorum's' rules endure e'en censures undeserved.
      <br><b>Exp:</b> From propriety of conduct men obtain greatness; from impropriety comes insufferable disgrace.","Thirukkural"),
      __("138.
      'Decorum true' observed a seed of good will be;
      'Decorum's breach' will sorrow yield eternally.
      <br><b>Exp:</b> Propriety of conduct is the seed of virtue; impropriety will ever cause sorrow.","Thirukkural"),
      __("139.
      It cannot be that they who 'strict decorum's' law fulfil,
      E'en in forgetful mood, should utter words of ill.
      <br><b>Exp:</b> Those who study propriety of conduct will not speak evil, even forgetfully.","Thirukkural"),
      __("140.
      Who know not with the world in harmony to dwell,
      May many things have learned, but nothing well.
      <br><b>Exp:</b> Those who know not how to act agreeably to the world, though they have learnt many things, are still ignorant.","Thirukkural"),

      // 1.2.11 Not coveting another's Wife

      __("141.
      Who laws of virtue and possession's rights have known,
      Indulge no foolish love of her by right another's own.
      <br><b>Exp:</b> The folly of desiring her who is the property of another will not be found in those who know (the attributes of) virtue and (the rights of) property.","Thirukkural"),
      __("142
      No fools, of all that stand from virtue's pale shut out,
      Like those who longing lurk their neighbour's gate without.
      <br><b>Exp:</b> Among all those who stand on the outside of virtue, there are no greater fools than those who stand outside their neighbour's door.","Thirukkural"),
      __("143
      They're numbered with the dead, e'en while they live, -how otherwise?
      With wife of sure confiding friend who evil things devise.
      <br><b>Exp:</b> Certainly they are no better than dead men who desire evil towards the wife of those who
      undoubtingly confide in them.","Thirukkural"),
      __("144
      How great soe'er they be, what gain have they of life,
      Who, not a whit reflecting, seek a neighbour's wife.
      <br><b>Exp:</b> However great one may be, what does it avail if, without at all considering his guilt, he goes unto the wife of another ?","Thirukkural"),
      __("145
      'Mere triflel' saying thus, invades the home, so he ensures.
      A gain of guilt that deathless aye endures.
      <br><b>Exp:</b> He who thinks lightly of going into the wife of another acquires guilt that will abide with him
      imperishably and for ever.","Thirukkural"),
      __("146
      Who home ivades, from him pass nevermore,
      Hatred and sin, fear, foul disgrace; these four.
      <br><b>Exp:</b> Hatred, sin, fear, disgrace; these four will never leave him who goes in to his neighbour's wife.","Thirukkural"),
      __("147
      Who sees the wife, another's own, with no desiring eye
      In sure domestic bliss he dwelleth ever virtuously.
      <br><b>Exp:</b> He who desires not the womanhood of her who should walk according to the will of another will be praised as a virtuous house-holder.","Thirukkural"),
      __("148
      Manly excellence, that looks not on another's wife,
      Is not virtue merely, 'tis full 'propriety' of life.
      <br><b>Exp:</b> That noble manliness which looks not at the wife of another is the virtue and dignity of the great.","Thirukkural"),
      __("149
      Who 're good indeed, on earth begirt by ocean's gruesome tide?
      The men who touch not her that is another's bride.
      <br><b>Exp:</b> Is it asked, \"who are those who shall obtain good in this world surrounded by the terror-producing sea ?\" Those who touch not the shoulder of her who belongs to another.","Thirukkural"),
      __("150
      Though virtue's bounds he pass, and evil deeds hath wrought;
      At least, 'tis good if neighbour's wife he covet not.
      <br><b>Exp:</b> Though a man perform no virtuous deeds and commit (every) vice, it will be well if he desire not the womanhood of her who is within the limit (of the house) of another.","Thirukkural"),

      // 1.2.12. The Possession of Patience, Forbearance

      __("151
      As earth bears up the men who delve into her breast,
      To bear with scornful men of virtues is the best.
      <br><b>Exp:</b> To bear with those who revile us, just as the earth bears up those who dig it, is the first of virtues.","Thirukkural"),
      __("152
      Forgiving trespasses is good always;
      Forgetting them hath even higher praise;
      <br><b>Exp:</b> Bear with reproach even when you can retaliate; but to forget it will be still better than that.","Thirukkural"),
      __("153
      The sorest poverty is bidding guest unfed depart;
      The mightiest might to bear with men of foolish heart.
      <br><b>Exp:</b> To neglect hospitality is poverty of poverty. To bear with the ignorant is might of might.","Thirukkural"),
      __("154
      Seek'st thou honour never tarnished to retain;
      So must thou patience, guarding evermore, maintain.
      <br><b>Exp:</b> If you desire that greatness should never leave, you preserve in your conduct the exercise of
      patience.","Thirukkural"),
      __("155
      Who wreak their wrath as worthless are despised;
      Who patiently forbear as gold are prized.
      <br><b>Exp:</b> (The wise) will not at all esteem the resentful. They will esteem the patient just as the gold which they lay up with care.","Thirukkural"),
      __("156
      Who wreak their wrath have pleasure for a day;
      Who bear have praise till earth shall pass away.
      <br><b>Exp:</b> The pleasure of the resentful continues for a day. The praise of the patient will continue until (the final destruction of) the world.","Thirukkural"),
      __("157
      Though others work thee ill, thus shalt thou blessing reap;
      Grieve for their sin, thyself from vicious action keep!
      <br><b>Exp:</b> Though others inflict injuries on you, yet compassionating the evil (that will come upon them) it will be well not to do them anything contrary to virtue.","Thirukkural"),
      __("158
      With overweening pride when men with injuries assail,
      By thine own righteous dealing shalt thou mightily prevail.
      <br><b>Exp:</b> Let a man by patience overcome those who through pride commit excesses.","Thirukkural"),
      __("159
      They who transgressors' evil words endure
      With patience, are as stern ascetics pure.
      <br><b>Exp:</b> Those who bear with the uncourteous speech of the insolent are as pure as the ascetics.","Thirukkural"),
      __("160
      Though 'great' we deem the men that fast and suffer pain,
      Who others' bitter words endure, the foremost place obtain.
      <br><b>Exp:</b> Those who endure abstinence from food are great, next to those who endure the uncourteous speech of others.","Thirukkural"),

      // 1.2.13 Not Envying

      __("161
      As 'strict decorum's' laws, that all men bind,
      Let each regard unenvying grace of mind.
      <br><b>Exp:</b> Let a man esteem that disposition which is free from envy in the same manner as propriety of conduct.","Thirukkural"),
      __("162
      If man can learn to envy none on earth,
      'Tis richest gift, -beyond compare its worth.
      <br><b>Exp:</b> Amongst all attainable excellences there is none equal to that of being free from envy towords others.","Thirukkural"),
      __("163
      Nor wealth nor virtue does that man desire 'tis plain,
      Whom others' wealth delights not, feeling envious pain.
      <br><b>Exp:</b> Of him who instead of rejoicing in the wealth of others, envies it, it will be said \"he neither desires virtue not wealth.\"","Thirukkural"),
      __("164
      The wise through envy break not virtue's laws,
      Knowing ill-deeds of foul disgrace the cause.
      <br><b>Exp:</b> (The wise) knowing the misery that comes from transgression will not through envy commit
      unrighteous deeds.","Thirukkural"),
      __("165
      Envy they have within! Enough to seat their fate!
      Though foemen fail, envy can ruin consummate.
      <br><b>Exp:</b> To those who cherish envy that is enough. Though free from enemies that (envy) will bring
      destruction.","Thirukkural"),
      __("166
      Who scans good gifts to others given with envious eye,
      His kin, with none to clothe or feed them, surely die.
      <br><b>Exp:</b> He who is envious at a gift (made to another) will with his relations utterly perish destitute of food and rainment.","Thirukkural"),
      __("167
      From envious man good fortune's goddess turns away,
      Grudging him good, and points him out misfortune's prey.
      <br><b>Exp:</b> Goddess envying (the prosperity) of the envious man will depart and introduce him to her sister.","Thirukkural"),
      __("168
      Envy, embodied ill, incomparable bane,
      Good fortune slays, and soul consigns to fiery pain.
      <br><b>Exp:</b> Envy will destroy (a man's) wealth (in his world) and drive him into the pit of fire (in the world to come.)","Thirukkural"),
      __("169
      To men of envious heart, when comes increase of joy,
      Or loss to blameless men, the 'why' will thoughtful hearts employ.
      <br><b>Exp:</b> The wealth of a man of envious mind and the poverty of the righteous will be pondered.","Thirukkural"),
      __("170
      No envious men to large and full felicity attain;
      No men from envy free have failed a sure increase to gain.
      <br><b>Exp:</b> Never have the envious become great; never have those who are free from envy been without
      greatness.","Thirukkural"),

      // 1.2.14 Not Coveting

      __("171
      With soul unjust to covet others' well-earned store,
      Brings ruin to the home, to evil opes the door.
      <br><b>Exp:</b> If a man departing from equity covet the property (of others), at that very time will his family be destroyed and guilt be incurred.","Thirukkural"),
      __("172
      Through lust of gain, no deeds that retribution bring,
      Do they, who shrink with shame from every unjust thing.
      <br><b>Exp:</b> Those who blush at the want of equity will not commit disgraceful acts through desire of the profit that may be gained.","Thirukkural"),
      __("173
      No deeds of ill, misled by base desire,
      Do they, whose souls to other joys aspire.
      <br><b>Exp:</b> Those who desire the higher pleasures (of heaven) will not act unjustly through desire of the trifling joy. (in this life.)","Thirukkural"),
      __("174
      Men who have conquered sense, with sight from sordid vision freed,
      Desire not other's goods, e'en in the hour of sorest need.
      <br><b>Exp:</b> The wise who have conquered their senses and are free from crime, will not covet (the things of
      others), with the thought \"we are destitute.\"","Thirukkural"),
      __("175
      What gain, though lore refined of amplest reach he learn,
      His acts towards all mankind if covetous desire to folly turn?
      <br><b>Exp:</b> What is the advantage of extensive and accurate knowledge if a man through covetousness act
      senselessly towards all ?","Thirukkural"),
      __("176
      Though, grace desiring, he in virtue's way stand strong,
      He's lost who wealth desires, and ponders deeds of wrong.
      <br><b>Exp:</b> If he, who through desire of the virtue of kindness abides in the domestic state i.e., the path in which it may be obtained, covet (the property of others) and think of evil methods (to obtain it), he will perish.","Thirukkural"),
      __("177
      Seek not increase by greed of gain acquired;
      That fruit matured yields never good desired.
      <br><b>Exp:</b> Desire not the gain of covetousness. In the enjoyment of its fruits there is no glory.","Thirukkural"),
      __("178
      What saves prosperity from swift decline?
      Absence of lust to make another's cherished riches thine!
      <br><b>Exp:</b> If it is weighed, \"what is the indestructibility of wealth,\" it is freedom from covetousness.","Thirukkural"),
      __("179
      Good fortune draws anigh in helpful time of need,
      To him who, schooled in virtue, guards his soul from greed.
      <br><b>Exp:</b> Lakshmi, knowing the manner (in which she may approach) will immediately come to those wise
      men who, knowing that it is virtue, covet not the property of others.","Thirukkural"),
      __("180
      From thoughtless lust of other's goods springs fatal ill,
      Greatness of soul that covets not shall triumph still.
      <br><b>Exp:</b> To covet (the wealth of another) regardless of consequences will bring destruction. That greatness (of mind) which covets not will give victory.","Thirukkural"),

      // 1.2.15 Not Backbiting

      __("181
      Though virtuous words his lips speak not, and all his deeds are ill.
      If neighbour he defame not, there's good within him still.
      <br><b>Exp:</b> Though one do not even speak of virtue and live in sin, it will be well if it be said of him \"he does not backbite.\"","Thirukkural"),
      __("182
      Than he who virtue scorns, and evil deeds performs, more vile,
      Is he that slanders friend, then meets him with false smile.
      <br><b>Exp:</b> To smile deceitfully (in another's presence) after having reviled him to his destruction (behind his back) is a greater evil than the commission of (every other) sin and the destruction of (every) virtue.","Thirukkural"),
      __("183
      'Tis greater gain of virtuous good for man to die,
      Than live to slander absent friend, and falsely praise when nigh.
      <br><b>Exp:</b> Death rather than life will confer upon the deceitful backbiter the profit which (the treatises on) virtue point out.","Thirukkural"),
      __("184
      In presence though unkindly words you speak, say not
      In absence words whose ill result exceeds your thought.
      <br><b>Exp:</b> Though you speak without kindness before another's face speak not in his absence words which
      regard not the evil subsequently resulting from it.","Thirukkural"),
      __("185
      The slanderous meanness that an absent friend defames,
      'This man in words owns virtue, not in heart,' proclaims.
      <br><b>Exp:</b> The emptiness of that man's mind who (merely) praises virtue will be seen from the meanness of
      reviling another behind his back.","Thirukkural"),
      __("186
      Who on his neighbours' sins delights to dwell,
      The story of his sins, culled out with care, the world will tell.
      <br><b>Exp:</b> The character of the faults of that man who publishes abroad the faults of others will be sought out and published.","Thirukkural"),
      __("187
      With friendly art who know not pleasant words to say,
      Speak words that sever hearts, and drive choice friends away.
      <br><b>Exp:</b> Those who know not to live in friendship with amusing conversation will by back-biting estrange
      even their relatives.","Thirukkural"),
      __("188
      Whose nature bids them faults of closest friends proclaim
      What mercy will they show to other men's good name?
      <br><b>Exp:</b> What will those not do to strangers whose nature leads them to publish abroad the faults of their intimate friends ?","Thirukkural"),
      __("189
      'Tis charity, I ween, that makes the earth sustain their load.
      Who, neighbours' absence watching, tales or slander tell abroad.
      <br><b>Exp:</b> The world through charity supports the weight of those who reproach others observing their
      absence.","Thirukkural"),
      __("190
      If each his own, as neighbours' faults would scan,
      Could any evil hap to living man?
      <br><b>Exp:</b> If they observed their own faults as they observe the faults of others, would any evil happen to men ?","Thirukkural"),

      // 1.2.16 The Not Speaking Profitless Words

      __("191
      Words without sense, while chafe the wise,
      Who babbles, him will all despise.
      <br><b>Exp:</b> He who to the disgust of many speaks useless things will be despised by all.","Thirukkural"),
      __("192
      Words without sense, where many wise men hear, to pour
      Than deeds to friends ungracious done offendeth more.
      <br><b>Exp:</b> To speak useless things in the presence of many is a greater evil than to do unkind things towards friends.","Thirukkural"),
      __("193
      Diffusive speech of useless words proclaims
      A man who never righteous wisdom gains.
      <br><b>Exp:</b> That conversation in which a man utters forth useless things will say of him \"he is without virtue.\"","Thirukkural"),
      __("194
      Unmeaning, worthless words, said to the multitude,
      To none delight afford, and sever men from good.
      <br><b>Exp:</b> The words devoid of profit or pleasure which a man speaks will, being inconsistent with virtue,
      remove him from goodness.","Thirukkural"),
      __("195
      Gone are both fame and boasted excellence,
      When men of worth speak of words devoid of sense.
      <br><b>Exp:</b> If the good speak vain words their eminence and excellence will leave them.","Thirukkural"),
      __("196
      Who makes display of idle words' inanity,
      Call him not man, -chaff of humanity!
      <br><b>Exp:</b> Call not him a man who parades forth his empty words. Call him the chaff of men.","Thirukkural"),
      __("197
      Let those who list speak things that no delight afford,
      'Tis good for men of worth to speak no idle word.
      <br><b>Exp:</b> Let the wise if they will, speak things without excellence; it will be well for them not to speak useless things.","Thirukkural"),
      __("198
      The wise who weigh the worth of every utterance,
      Speak none but words of deep significance.
      <br><b>Exp:</b> The wise who seek after rare pleasures will not speak words that have not much weight in them.","Thirukkural"),
      __("199
      The men of vision pure, from wildering folly free,
      Not e'en in thoughtless hour, speak words of vanity.
      <br><b>Exp:</b> Those wise men who are without faults and are freed from ignorance will not even forgetfully speak things that profit not.","Thirukkural"),
      __("200
      If speak you will, speak words that fruit afford,
      If speak you will, speak never fruitless word.
      <br><b>Exp:</b> Speak what is useful, and speak not useless words.","Thirukkural"),

      // 1.2.17 Dread of Evil Deeds

      __("201.
      With sinful act men cease to feel the dread of ill within,
      The excellent will dread the wanton pride of cherished sin.
      <br><b>Exp:</b> Those who have experience of evil deeds will not fear, but the excellent will fear the pride of sin.
      ", "Thirukkural"),
      __("202.
      Since evils new from evils ever grow,
      Evil than fire works out more dreaded woe.
      <br><b>Exp:</b> Because evil produces evil, therefore should evil be feared more than fire.
      ", "Thirukkural"),
      __("203.
      Even to those that hate make no return of ill;
      So shalt thou wisdom's highest law, 'tis said, fulfil.
      <br><b>Exp:</b> To do no evil to enemies will be called the chief of all virtues.
      ", "Thirukkural"),
      __("204.
      Though good thy soul forget, plot not thy neighbour's fall,
      Thy plans shall 'virtue's Power' by ruin to thyself forestall.
      <br><b>Exp:</b> Even though forgetfulness meditate not the ruin of another. Virtue will meditate the ruin of him who thus meditates.
      ", "Thirukkural"),
      __("205.
      Make not thy poverty a plea for ill;
      Thy evil deeds will make thee poorer still.
      <br><b>Exp:</b> Commit not evil, saying, \"I am poor\": if you do, you will become poorer still.
      ", "Thirukkural"),
      __("206.
      What ranks as evil spare to do, if thou would'st shun
      Affliction sore through ill to thee by others done.
      <br><b>Exp:</b> Let him not do evil to others who desires not that sorrows should pursue him.
      ", "Thirukkural"),
      __("207.
      From every enmity incurred there is to 'scape, a way;
      The wrath of evil deeds will dog men's steps, and slay.
      <br><b>Exp:</b> However great be the enmity men have incurred they may still live. The enmity of sin will incessantly pursue and kill.
      ", "Thirukkural"),
      __("208.
      Man's shadow dogs his steps where'er he wends;
      Destruction thus on sinful deeds attends.
      <br><b>Exp:</b> Destruction will dwell at the heels of those who commit evil even as their shadow that leaves them not.
      ", "Thirukkural"),
      __("209.
      Beware, if to thyself thyself is dear,
      Lest thou to aught that ranks as ill draw near!
      <br><b>Exp:</b> If a man love himself, let him not commit any sin however small.
      ", "Thirukkural"),
      __("210.
      The man, to devious way of sin that never turned aside,
      From ruin rests secure, whatever ills betide.
      <br><b>Exp:</b> Know ye that he is freed from destruction who commits no evil, going to neither side of the right path.
      ", "Thirukkural"),

      // 1.2.18 The knowledge of what is Befitting a Man's Position

      __("211.
      Duty demands no recompense; to clouds of heaven,
      By men on earth, what answering gift is given?
      <br><b>Exp:</b> Benevolence seeks not a return. What does the world give back to the clouds ?
      ", "Thirukkural"),
      __("212.
      The worthy say, when wealth rewards their toil-spent hours,
      For uses of beneficence alone 'tis ours.
      <br><b>Exp:</b> All the wealth acquired with perseverance by the worthy is for the exercise of benevolence.
      ", "Thirukkural"),
      __("213.
      To 'due beneficence' no equal good we know,
      Amid the happy gods, or in this world below.
      <br><b>Exp:</b> It is difficult to obtain another good equal to benevolence either in this world or in that of the gods.
      ", "Thirukkural"),
      __("214.
      Who knows what's human life's befitting grace,
      He lives; the rest 'mongst dead men have their place.
      <br><b>Exp:</b> He truly lives who knows (and discharges) the proper duties (of benevolence). He who knows them
      not will be reckoned among the dead.
      ", "Thirukkural"),
      __("215.
      The wealth of men who love the 'fitting way,' the truly wise,
      Is as when water fills the lake that village needs supplies.
      <br><b>Exp:</b> The wealth of that man of eminent knowledge who desires to exercise the benevolence approved of
      by the world, is like the full waters of a city-tank.
      ", "Thirukkural"),
      __("216.
      A tree that fruits in th' hamlet's central mart,
      Is wealth that falls to men of liberal heart.
      <br><b>Exp:</b> The wealth of a man (possessed of the virtue) of benevolence is like the ripening of a fruitful tree in the midst of a town.
      ", "Thirukkural"),
      __("217.
      Unfailing tree that healing balm distils from every part,
      Is ample wealth that falls to him of large and noble heart.
      <br><b>Exp:</b> If wealth be in the possession of a man who has the great excellence (of benevolence), it is like a tree which as a medicine is an infallible cure for disease.
      ", "Thirukkural"),
      __("218.
      E'en when resources fall, they weary not of 'kindness due,'-
      They to whom Duty's self appears in vision true.
      <br><b>Exp:</b> The wise who know what is duty will not scant their benevolence even when they are without wealth.
      ", "Thirukkural"),
      __("219.
      The kindly-hearted man is poor in this alone,
      When power of doing deeds of goodness he finds none.
      <br><b>Exp:</b> The poverty of a benevolent man, is nothing but his inability to exercise the same.
      ", "Thirukkural"),
      __("220.
      Though by 'beneficence,' the loss of all should come,
      'Twere meet man sold himself, and bought it with the sum.
      <br><b>Exp:</b> If it be said that loss will result from benevolence, such loss is worth being procured even by the sale of one's self.", "Thirukkural"),

      // 1.2.19 Giving

      __("221.
      Call that a gift to needy men thou dost dispense,
      All else is void of good, seeking for recompense.
      <br><b>Exp:</b> To give to the destitute is true charity. All other gifts have the nature of (what is done for) a measured return. ", "Thirukkural"),
      __("222.
      Though men declare it heavenward path, yet to receive is ill;
      Though upper heaven were not, to give is virtue still.
      <br><b>Exp:</b> To beg is evil, even though it were said that it is a good path (to heaven). To give is good, even though it were said that those who do so cannot obtain heaven.
      ", "Thirukkural"),
      __("223.
      'I've nought' is ne'er the high-born man's reply;
      He gives to those who raise themselves that cry.
    <br><b>Exp:</b>   (Even in a low state) not to adopt the mean expedient of saying \"I have nothing,\" but to give, is the characteristic of the mad of noble birth.
      ", "Thirukkural"),
      __("224.
      The suppliants' cry for aid yields scant delight,
      Until you see his face with grateful gladness bright.
      <br><b>Exp:</b> To see men begging from us in disagreeable, until we see their pleasant countenance.
      ", "Thirukkural"),
      __("225.
      'Mid devotees they're great who hunger's pangs sustain,
      Who hunger's pangs relieve a higher merit gain.
      <br><b>Exp:</b> The power of those who perform penance is the power of enduring hunger. It is inferior to the power of those who remove the hunger (of others).
      ", "Thirukkural"),
      __("226.
      Let man relieve the wasting hunger men endure;
      For treasure gained thus finds he treasure-house secure.
    <br><b>Exp:</b>   The removal of the killing hunger of the poor is the place for one to lay up his wealth.
      ", "Thirukkural"),
      __("227.
      Whose soul delights with hungry men to share his meal,
      The hand of hunger's sickness sore shall never feel.
      <br><b>Exp:</b> The fiery disease of hunger shall never touch him who habitually distributes his food to others.
      ", "Thirukkural"),
      __("228.
      Delight of glad'ning human hearts with gifts do they not know.
      Men of unpitying eye, who hoard their wealth and lose it so?
      <br><b>Exp:</b> Do the hard-eyed who lay up and lose their possessions not know the happiness which springs from the pleasure of giving ?
      ", "Thirukkural"),
      __("229.
      They keep their garners full, for self alone the board they spread;-
      'Tis greater pain, be sure, than begging daily bread!
      <br><b>Exp:</b> Solitary and unshared eating for the sake of filling up one's own riches is certainly much more
      unpleasant than begging.
      ", "Thirukkural"),
      __("230.
      'Tis bitter pain to die, 'Tis worse to live.
      For him who nothing finds to give!
      <br><b>Exp:</b> Nothing is more unpleasant than death: yet even that is pleasant where charity cannot be exercised.
      ", "Thirukkural"),

      // 1.2.20 Renown

      __("231.
      See that thy life the praise of generous gifts obtain;
      Save this for living man exists no real gain.
      <br><b>Exp:</b> Give to the poor and live with praise. There is no greater profit to man than that.
      ", "Thirukkural"),
      __("232.
      The speech of all that speak agrees to crown
      The men that give to those that ask, with fair renown.
      <br><b>Exp:</b> Whatsoever is spoken in the world will abide as praise upon that man who gives alms to the poor.
      ", "Thirukkural"),
      __("233.
      Save praise alone that soars on high,
      Nought lives on earth that shall not die.
      <br><b>Exp:</b> There is nothing that stands forth in the world imperishable, except fame, exalted in solitary
      greatness.
      ", "Thirukkural"),
      __("234.
      If men do virtuous deeds by world-wide ample glory crowned,
      The heavens will cease to laud the sage for other gifts renowned.
      <br><b>Exp:</b> If one has acquired extensive fame within the limits of this earth, the world of the Gods will no longer praise those sages who have attained that world.
      ", "Thirukkural"),
      __("235.
      Loss that is gain, and death of life's true bliss fulfilled,
      Are fruits which only wisdom rare can yield.
      <br><b>Exp:</b> Prosperity to the body of fame, resulting in poverty to the body of flesh and the stability to the former arising from the death of the latter, are achievable only by the wise.
      ", "Thirukkural"),
      __("236.
      If man you walk the stage, appear adorned with glory's grace;
      Save glorious you can shine, 'twere better hide your face.
    <br><b>Exp:</b>   If you are born (in this world), be born with qualities conductive to fame. From those who are
      destitute of them it will be better not to be born.
      ", "Thirukkural"),
      __("237.
      If you your days will spend devoid of goodly fame,
      When men despise, why blame them? You've yourself to blame.
      <br><b>Exp:</b> Why do those who cannot live with praise, grieve those who despise them, instead of grieving
      themselves for their own inability.
      ", "Thirukkural"),
      __("238.
      Fame is virtue's child, they say; if, then,
      You childless live, you live the scorn of men.
    <br><b>Exp:</b>   Not to beget fame will be esteemed a disgrace by the wise in this world.
      ", "Thirukkural"),
      __("239.
      The blameless fruits of fields' increase will dwindle down,
      If earth the burthen bear of men without renown.
      <br><b>Exp:</b> The ground which supports a body without fame will diminish in its rich produce.
      ", "Thirukkural"),
      __("240.
      Who live without reproach, them living men we deem;
      Who live without renown, live not, though living men they seem.
      <br><b>Exp:</b> Those live who live without disgrace. Those who live without fame live not.
      ", "Thirukkural"),

      // 1.3 Ascetic Virtue
      // 1.3.1. The Possession of Benevolence

      __("241.
      Wealth 'mid wealth is wealth 'kindliness';
      Wealth of goods the vilest too possess.
      <br><b>Exp:</b> The wealth of kindness is wealth of wealth, in as much as the wealth of property is possessed by the basest of men.
      ", "Thirukkural"),
      __("242.
      The law of 'grace' fulfil, by methods good due trial made,
      Though many systems you explore, this is your only aid.
      <br><b>Exp:</b> (Stand) in the good path, consider, and be kind. Even considering according to the conflicting tenets of the different sects, kindness will be your best aid, (in the acquisition of heavenly bliss.)
      ", "Thirukkural"),
      __("243.
      They in whose breast a 'gracious kindliness' resides,
      See not the gruesome world, where darkness drear abides.
      <br><b>Exp:</b> They will never enter the world of darkness and wretchedness whose minds are the abode of
      kindness.
      ", "Thirukkural"),
      __("244.
      Who for undying souls of men provides with gracious zeal,
      In his own soul the dreaded guilt of sin shall never feel.
      <br><b>Exp:</b> (The wise) say that the evils, which his soul would dread, will never come upon the man who
      exercises kindness and protects the life (of other creatures)
      ", "Thirukkural"),
      __("245.
      The teeming earth's vast realm, round which the wild winds blow,
      Is witness, men of 'grace' no woeful want shall know.
      <br><b>Exp:</b> This great rich earth over which the wind blows, is a witness that sorrow never comes upon the kindhearted.
      ", "Thirukkural"),
      __("246.
      Gain of true wealth oblivious they eschew,
      Who 'grace' forsake, and graceless actions do.
      <br><b>Exp:</b> (The wise) say that those who neglect kindness and practise cruelties, neglected virtue (in their former birth), and forgot (the sorrows which they must suffer.)
      ", "Thirukkural"),
      __("247.
      As to impoverished men this present world is not;
      The 'graceless' in you world have neither part nor lot.
      <br><b>Exp:</b> As this world is not for those who are without wealth, so that world is not for those who are without kindness.
      ", "Thirukkural"),
      __("248.
      Who lose the flower of wealth, when seasons change, again may bloom;
      Who lose 'benevolence', lose all; nothing can change their doom.
      <br><b>Exp:</b> Those who are without wealth may, at some future time, become prosperous; those who are destitute of kindness are utterly destitute; for them there is no change.
      ", "Thirukkural"),
      __("249.
      When souls unwise true wisdom's mystic vision see,
      The 'graceless' man may work true works of charity.
      <br><b>Exp:</b> If you consider, the virtue of him who is without kindness is like the perception of the true being by him who is without wisdom.
      ", "Thirukkural"),
      __("250.
      When weaker men you front with threat'ning brow,
      Think how you felt in presence of some stronger foe.
      <br><b>Exp:</b> When a man is about to rush upon those who are weaker than himself, let him remember how he has
      stood (trembling) before those who are stronger than himself.
      ", "Thirukkural"),

      // 1.3.2 The Renunciation of Flesh

      __("251.
      How can the wont of 'kindly grace' to him be known,
      Who other creatures' flesh consumes to feed his own?
      <br><b>Exp:</b> How can he be possessed of kindness, who to increase his own flesh, eats the flesh of other creatures.
      ", "Thirukkural"),
      __("252.
      No use of wealth have they who guard not their estate;
      No use of grace have they with flesh who hunger sate.
      <br><b>Exp:</b> As those possess no property who do not take care of it, so those possess no kindness who feed on flesh.
      ", "Thirukkural"),
      __("253.
      Like heart of them that murderous weapons bear, his mind,
      Who eats of savoury meat, no joy in good can find.
      <br><b>Exp:</b> Like the (murderous) mind of him who carries a weapon (in his hand), the mind of him who feasts
      with pleasure on the body of another (creature), has no regard for goodness.
      ", "Thirukkural"),
      __("254.
      'What's grace, or lack of grace'? 'To kill' is this, that 'not to kill';
      To eat dead flesh can never worthy end fulfil.
      <br><b>Exp:</b> If it be asked what is kindness and what its opposite, the answer would be preservation and
      destruction of life; and therefore it is not right to feed on the flesh (obtained by taking away life).
      ", "Thirukkural"),
      __("255.
      If flesh you eat not, life's abodes unharmed remain;
      Who eats, hell swallows him, and renders not again.
      <br><b>Exp:</b> Not to eat flesh contributes to the continuance of life; therefore if a man eat flesh, hell will not open its mouth (to let him escape out, after he has once fallen in).
      ", "Thirukkural"),
      __("256.
      'We eat the slain,' you say, by us no living creatures die;
      Who'd kill and sell, I pray, if none came there the flesh to buy?
      <br><b>Exp:</b> If the world does not destroy life for the purpose of eating, then no one would sell flesh for the sake of money.
      ", "Thirukkural"),
      __("257.
      With other beings' ulcerous wounds their hunger they appease;
      If this they felt, desire to eat must surely cease.
      <br><b>Exp:</b> If men should come to know that flesh is nothing but the unclean ulcer of a body, let them abstain from eating it.
      ", "Thirukkural"),
      __("258.
      Whose souls the vision pure and passionless perceive,
      Eat not the bodies men of life bereave.
      <br><b>Exp:</b> The wise, who have freed themselves from mental delusion, will not eat the flesh which has been
      severed from an animal.
      ", "Thirukkural"),
      __("259.
      Than thousand rich oblations, with libations rare,
      Better the flesh of slaughtered beings not to share.
      <br><b>Exp:</b> Not to kill and eat (the flesh of) an animal, is better than the pouring forth of ghee etc., in a thousand sacrifices.
      ", "Thirukkural"),
      __("260.
      Who slays nought,- flesh rejects- his feet before
      All living things with clasped hands adore.
      <br><b>Exp:</b> All creatures will join their hands together, and worship him who has never taken away life, nor eaten flesh.
      ", "Thirukkural"),

      // 1.3.3 Penance

      __("261.
      To bear due penitential pains, while no offence
      He causes others, is the type of 'penitence'.
      <br><b>Exp:</b> The nature of religious discipline consists, in the endurance (by the ascetic) of the sufferings which it brings on himself, and in abstaining from giving pain to others.
      ", "Thirukkural"),
      __("262.
      To 'penitents' sincere avails their 'penitence';
      Where that is not, 'tis but a vain pretence.
      <br><b>Exp:</b> Austerities can only be borne, and their benefits enjoyed, by those who have practised them (in a former birth); it will be useless for those who have not done so, to attempt to practise them (now).
      ", "Thirukkural"),
      __("263.
      Have other men forgotten 'penitence' who strive
      To earn for penitents the things by which they live?
      <br><b>Exp:</b> It is to provide food etc, for the ascetics who have abandoned (the desire of earthly possessions) that other persons have forgotten (to practise) austerity ?
      ", "Thirukkural"),
      __("264.
      Destruction to his foes, to friends increase of joy.
      The 'penitent' can cause, if this his thoughts employ.
      <br><b>Exp:</b> If (the ascetic) desire the destruction of his enemies, or the aggrandizement of his friends, it will be effected by (the power of) his austerities.
      ", "Thirukkural"),
      __("265.
      That what they wish may, as they wish, be won,
      By men on earth are works of painful 'penance' done.
      <br><b>Exp:</b> Religious dislipline is practised in this world, because it secures the attainment of whatever one may wish to enjoy (in the world to come).
      ", "Thirukkural"),
      __("266.
      Who works of 'penance' do, their end attain,
      Others in passion's net enshared, toil but in vain.
      Those discharge their duty who perform austerities; all others accomplish their own destruction,
      through the entanglement of the desire (of riches and sensual pleasure).
      ", "Thirukkural"),
      __("267.
      The hotter glows the fining fire, the gold the brighter shines;
      The pain of penitence, like fire, the soul of man refines.
      <br><b>Exp:</b> Just as gold is purified as heated in the fire, will those shine, who have endured the burning of pain (in frequent austerities).
      ", "Thirukkural"),
      __("268.
      Who gains himself in utter self-control,
      Him worships every other living soul.
      <br><b>Exp:</b> All other creatures will worship him who has attained the control of his own soul.
      ", "Thirukkural"),
      __("269.
      E'en over death the victory he may gain,
      If power by penance won his soul obtain.
      <br><b>Exp:</b> Those who have attained the power which religious discipline confers, will be able also to pass the limit of death.
      ", "Thirukkural"),
      __("270.
      The many all things lack! The cause is plain,
      The 'penitents' are few. The many shun such pain.
      <br><b>Exp:</b> Because there are few who practise austerity and many who do not, there are many destitute and
      few rich in this world.", "Thirukkural"),

      // 1.3.4 Inconsistent Conduct

      __(" 271.
      Who with deceitful mind in false way walks of covert sin,
      The five-fold elements his frame compose, decide within.
      <br><b>Exp:</b> The five elements (of his body) will laugh within him at the feigned conduct of the deceitful minded
      man.
      ", "Thirukkural"),
      __(" 272.
      What gain, though virtue's semblance high as heaven his fame exalt,
      If heart dies down through sense of self-detected fault?
      <br><b>Exp:</b> What avails an appearance (of sanctity) high as heaven, if his mind suffers (the indulgence) of
      conscious sin.
      ", "Thirukkural"),
      __(" 273.
      As if a steer should graze wrapped round with tiger's skin,
      Is show of virtuous might when weakness lurks within.
      <br><b>Exp:</b> The assumed appearance of power, by a man who has no power (to restrain his senses and perform
      austerity), is like a cow feeding on grass covered with a tiger's skin.
      ", "Thirukkural"),
      __(" 274.
      'Tis as a fowler, silly birds to snare, in thicket lurks.
      When, clad in stern ascetic garb, one secret evil works.
      <br><b>Exp:</b> He who hides himself under the mask of an ascetic and commits sins, like a sportsman who conceals himself in the thicket to catch birds.
      ", "Thirukkural"),
      __(" 275.
      'Our souls are free,' who say, yet practise evil secretly,
      'What folly have we wrought!' by many shames o'er-whelmed, shall cry.
      <br><b>Exp:</b> The false conduct of those who say they have renounced all desire will one day bring them sorrows that will make them cry out, \"Oh! what have we done, what have we done.\"
      ", "Thirukkural"),
      __(" 276.
      In mind renouncing nought, in speech renouncing every tie,
      Who guileful live,- no men are found than these of 'harder eye'.
      <br><b>Exp:</b> Amongst living men there are none so hard-hearted as those who without to saking (desire) in their heart, falsely take the appearance of those who have forsaken (it).
      ", "Thirukkural"),
      __(" 277.
      Outward, they shine as 'kunri' berry's scarlet bright;
      Inward, like tip of 'kunri' bead, as black as night.
      <br><b>Exp:</b> (The world) contains persons whose outside appears (as fair) as the (red) berry of the Abrus, but whose inside is as black as the nose of that berry.
      ", "Thirukkural"),
      __(" 278.
      Many wash in hollowed waters, living lives of hidden shame;
      Foul in heart, yet high upraised of men in virtuous fame.
      <br><b>Exp:</b> There are many men of masked conduct, who perform their ablutions, and (make a show) of
      greatness, while their mind is defiled (with guilt).
      ", "Thirukkural"),
      __(" 279.
      Cruel is the arrow straight, the crooked lute is sweet,
      Judge by their deeds the many forms of men you meet.
      <br><b>Exp:</b> As, in its use, the arrow is crooked, and the curved lute is straight, so by their deeds, (and not by their appearance) let (the uprightness or crookedness of) men be estimated.
      ", "Thirukkural"),
      __(" 280.
      What's the worth of shaven head or tresses long,
      If you shun what all the world condemns as wrong?
      <br><b>Exp:</b> There is no need of a shaven crown, nor of tangled hair, if a man abstain from those deeds which the wise have condemned.
      ", "Thirukkural"),

      // 1.3.5 The Absence of Fraud

      __(" 281.
      Who seeks heaven's joys, from impious levity secure,
      Let him from every fraud preserve his spirit pure.
      <br><b>Exp:</b> Let him, who desires not to be despised, keep his mind from (the desire of) defrauding another of the smallest thing.
      ", "Thirukkural"),
      __(" 282.
      'Tis sin if in the mind man but thought conceive;
      'By fraud I will my neighbour of his wealth bereave.'
      <br><b>Exp:</b> Even the thought (of sin) is sin; think not then of crafiily stealing the property of another.
      ", "Thirukkural"),
      __(" 283.
      The gain that comes by fraud, although it seems to grow
      With limitless increase, to ruin swift shall go.
      <br><b>Exp:</b> The property, which is acquired by fraud, will entirely perish, even while it seems to increase.
      ", "Thirukkural"),
      __(" 284.
      The lust inveterate of fraudful gain,
      Yields as its fruit undying pain.
      <br><b>Exp:</b> The eager desire of defrauding others will, when it brings forth its fruit, produce undying sorrow.
      ", "Thirukkural"),
      __(" 285.
      'Grace' is not in their thoughts, nor know they kind affection's power,
      Who neighbour's goods desire, and watch for his unguarded hour.
      <br><b>Exp:</b> The study of kindness and the exercise of benevolence is not with those who watch for another's
      forgetfulness, though desire of his property.
      ", "Thirukkural"),
      __(" 286.
      They cannot walk restrained in wisdom's measured bound,
      In whom inveterate lust of fraudful gain is found.
      <br><b>Exp:</b> They cannot walk steadfastly, according to rule, who eagerly desire to defraud others.
      ", "Thirukkural"),
      __(" 287.
      Practice of fraud's dark cunning arts they shun,
      Who long for power by 'measured wisdom' won.
      <br><b>Exp:</b> That black-knowledge which is called fraud, is not in those who desire that greatness which is called rectitude.
      ", "Thirukkural"),
      __(" 288.
      As virtue dwells in heart that 'measured wisdom' gains;
      Deceit in hearts of fraudful men established reigns.
      <br><b>Exp:</b> Deceit dwells in the mind of those who are conversant with fraud, even as virtue in the minds of those who are conversant with rectitude.
      ", "Thirukkural"),
      __(" 289.
      Who have no lore save that which fraudful arts supply,
      Acts of unmeasured vice committing straightway die.
      <br><b>Exp:</b> Those, who are acquainted with nothing but fraud, will perish in the very commission of
      transgression.
      ", "Thirukkural"),
      __(" 290.
      The fraudful forfeit life and being here below;
      Who fraud eschew the bliss of heavenly beings know.
      <br><b>Exp:</b> Even their body will fail the fraudulent; but even the world of the gods will not fail those who are free from fraud.
      ", "Thirukkural"),

      // 1.3.6 Veracity

      __(" 291.
      You ask, in lips of men what 'truth' may be;
      'Tis speech from every taint of evil free.
      <br><b>Exp:</b> Truth is the speaking of such words as are free from the least degree of evil (to others).
      ", "Thirukkural"),
      __(" 292.
      Falsehood may take the place of truthful word,
      If blessing, free from fault, it can afford.
      <br><b>Exp:</b> Even falsehood has the nature of truth, if it confer a benefit that is free from fault.
      ", "Thirukkural"),
      __(" 293.
      Speak not a word which false thy own heart knows
      Self-kindled fire within the false one's spirit glows.
      <br><b>Exp:</b> Let not a man knowingly tell a lie; for after he has told the lie, his mind will burn him (with the memory of his guilt).
      ", "Thirukkural"),
      __(" 294.
      True to his inmost soul who lives,- enshrined
      He lives in souls of all mankind.
      <br><b>Exp:</b> He who, in his conduct, preserves a mind free from deceit, will dwell in the minds of all men.
      ", "Thirukkural"),
      __(" 295.
      Greater is he who speaks the truth with full consenting mind.
      Than men whose lives have penitence and charity combined.
      <br><b>Exp:</b> He, who speaks truth with all his heart, is superior to those who make gifts and practise austerities.
      ", "Thirukkural"),
      __(" 296.
      No praise like that of words from falsehood free;
      This every virtue yields spontaneously.
      <br><b>Exp:</b> There is no praise like the praise of never uttering a falsehood: without causing any suffering, it will lead to every virtue.
      ", "Thirukkural"),
      __(" 297.
      If all your life be utter truth, the truth alone,
      'Tis well, though other virtuous acts be left undone.
      <br><b>Exp:</b> If a man has the power to abstain from falsehood, it will be well with him, even though he practise no other virtue.
      ", "Thirukkural"),
      __(" 298.
      Outward purity the water will bestow;
      Inward purity from truth alone will flow.
      <br><b>Exp:</b> Purity of body is produced by water and purity of mind by truthfulness.
      ", "Thirukkural"),
      __(" 299.
      Every lamp is not a lamp in wise men's sight;
      That's the lamp with truth's pure radiance bright.
      <br><b>Exp:</b> All lamps of nature are not lamps; the lamp of truth is the lamp of the wise.
      ", "Thirukkural"),
      __(" 300.
      Of all good things we've scanned with studious care,
      There's nought that can with truthfulness compare.
      <br><b>Exp:</b> Amidst all that we have seen (described) as real (excellence), there is nothing so good as
      truthfulness.
      ", "Thirukkural"),

      // 1.3.7 The not being Angry

      __(" 301.
      Where thou hast power thy angry will to work, thy wrath restrain;
      Where power is none, what matter if thou check or give it rein?
      <br><b>Exp:</b> He restrains his anger who restrains it when it can injure; when it cannot injure, what does it matter whether he restrain it, or not ?
      ", "Thirukkural"),
      __(" 302.
      Where power is none to wreak thy wrath, wrath importent is ill;
      Where thou hast power thy will to work, 'tis greater, evil still.
      <br><b>Exp:</b> Anger is bad, even when it cannot injure; when it can injure; there is no greater evil.
      ", "Thirukkural"),
      __(" 303.
      If any rouse thy wrath, the trespass straight forget;
      For wrath an endless train of evils will beget.
      <br><b>Exp:</b> Forget anger towards every one, as fountains of evil spring from it.
      ", "Thirukkural"),
      __(" 304.
      Wrath robs the face of smiles, the heart of joy,
      What other foe to man works such annoy?
      <br><b>Exp:</b> Is there a greater enemy than anger, which kills both laughter and joy ?
      ", "Thirukkural"),
      __(" 305.
      If thou would'st guard thyself, guard against wrath alway;
      'Gainst wrath who guards not, him his wrath shall slay.
      <br><b>Exp:</b> If a man would guard himself, let him guard against anger; if he do not guard it, anger will kill him.
      ", "Thirukkural"),
      __(" 306.
      Wrath, the fire that slayeth whose draweth near,
      Will burn the helpful 'raft' of kindred dear.
      <br><b>Exp:</b> The fire of anger will burn up even the pleasant raft of friendship.
      ", "Thirukkural"),
      __(" 307.
      The hand that smites the earth unfailing feels the sting;
      So perish they who nurse their wrath as noble thing.
      <br><b>Exp:</b> Destruction will come upon him who ragards anger as a good thing, as surely as the hand of him who strikes the ground will not fail.
      ", "Thirukkural"),
      __(" 308.
      Though men should work thee woe, like touch of tongues of fire.
      'Tis well if thou canst save thy soul from burning ire.
      <br><b>Exp:</b> Though one commit things against you as painful (to bear) as if a bundle of fire had been thrust upon you, it will be well, to refrain, if possible, from anger.
      ", "Thirukkural"),
      __(" 309.
      If man his soul preserve from wrathful fires,
      He gains with that whate'er his soul desires.
      <br><b>Exp:</b> If a man never indulges anger in his heart, he will at once obtain whatever he has thought of.
      ", "Thirukkural"),
      __(" 310.
      Men of surpassing wrath are like the men who've passed away;
      Who wrath renounce, equals of all-renouncing sages they.
      <br><b>Exp:</b> Those, who give way to excessive anger, are no better than dead men; but those, who are freed from it, are equal to those who are freed (from death).
      ", "Thirukkural"),

      // 1.3.8 Not doing Evil

      __(" 311.
      Though ill to neighbour wrought should glorious pride of wealth secure,
      No ill to do is fixed decree of men in spirit pure.
      <br><b>Exp:</b> It is the determination of the spotless not to cause sorrow to others, although they could (by so causing) obtain the wealth which confers greatness.
      ", "Thirukkural"),
      __(" 312.
      Though malice work its worst, planning no ill return, to endure,
      And work no ill, is fixed decree of men in spirit pure.
      <br><b>Exp:</b> It is the determination of the spotless not to do evil, even in return, to those who have cherished enmity and done them evil.
      ", "Thirukkural"),
      __(" 313.
      Though unprovoked thy soul malicious foes should sting,
      Retaliation wrought inevitable woes will bring.
      <br><b>Exp:</b> In an ascetic inflict suffering even on those who hate him, when he has not done them any evil, it will afterwards give him irretrievable sorrow.
      ", "Thirukkural"),
      __(" 314.
      To punish wrong, with kindly benefits the doers ply;
      Thus shame their souls; but pass the ill unheeded by.
      <br><b>Exp:</b> The (proper) punishment to those who have done evil (to you), is to put them to shame by showing them kindness, in return and to forget both the evil and the good done on both sides.
      ", "Thirukkural"),
      __(" 315.
      From wisdom's vaunted lore what doth the learner gain,
      If as his own he guard not others' souls from pain?
      <br><b>Exp:</b> What benefit has he derived from his knowledge, who does not endeavour to keep off pain from
      another as much as from himself ?
      ", "Thirukkural"),
      __(" 316.
      What his own soul has felt as bitter pain,
      From making others feel should man abstain.
      <br><b>Exp:</b> Let not a man consent to do those things to another which, he knows, will cause sorrow.
      ", "Thirukkural"),
      __(" 317.
      To work no wilful woe, in any wise, through all the days,
      To any living soul, is virtue's highest praise.
      <br><b>Exp:</b> It is the chief of all virtues not knowingly to do any person evil, even in the lowest degree, and at any time.
      ", "Thirukkural"),
      __(" 318.
      Whose soul has felt the bitter smart of wrong, how can
      He wrongs inflict on ever-living soul of man?
      <br><b>Exp:</b> Why does a man inflict upon other creatures those sufferings, which he has found by experience are sufferings to himself ?
      ", "Thirukkural"),
      __(" 319.
      If, ere the noontide, you to others evil do,
      Before the eventide will evil visit you.
      <br><b>Exp:</b> If a man inflict sorrow upon others in the morning, it will come upon him unsought in the very
      evening.
      ", "Thirukkural"),
      __(" 320.
      O'er every evil-doer evil broodeth still;
      He evil shuns who freedom seeks from ill.
      <br><b>Exp:</b> Sorrow will come upon those who cause pain to others; therfore those, who desire to be free from sorrow, give no pain to others.
      ", "Thirukkural"),

      // 1.3.9 Not killing

      __(" 321.
      What is the work of virtue? 'Not to kill';
      For 'killing' leads to every work of ill.
      <br><b>Exp:</b> Never to destroy life is the sum of all virtuous conduct. The destruction of life leads to every evil.
      ", "Thirukkural"),
      __(" 322.
      Let those that need partake your meal; guard every-thing that lives;
      This the chief and sum of lore that hoarded wisdom gives.
      <br><b>Exp:</b> The chief of all (the virtues) which authors have summed up, is the partaking of food that has been shared with others, and the preservation of the mainfold life of other creatures.
      ", "Thirukkural"),
      __(" 323.
      Alone, first of goods things, is 'not to slay';
      The second is, no untrue word to say.
      <br><b>Exp:</b> Not to destroy life is an incomparably (great) good next to it in goodness ranks freedom from
      falsehood.
      ", "Thirukkural"),
      __(" 324.
      You ask, What is the good and perfect way?
      'Tis path of him who studies nought to slay.
      <br><b>Exp:</b> Good path is that which considers how it may avoid killing any creature.
      ", "Thirukkural"),
      __(" 325.
      Of those who 'being' dread, and all renounce, the chief are they,
      Who dreading crime of slaughter, study nought to slay.
      <br><b>Exp:</b> Of all those who, fearing the permanence of earthly births, have abandoned desire, he is the chief who, fearing (the guilt of) murder, considers how he may avoid the destruction of life.
      ", "Thirukkural"),
      __(" 326.
      Ev'n death that life devours, their happy days shall spare,
      Who law, 'Thou shall not kill', uphold with reverent care.
      <br><b>Exp:</b> Yama, the destroyer of life, will not attack the life of him, who acts under the determination of never destroying life.
      ", "Thirukkural"),
      __(" 327.
      Though thine own life for that spared life the price must pay,
      Take not from aught that lives gift of sweet life away.
      <br><b>Exp:</b> Let no one do that which would destroy the life of another, although he should by so doing, lose his own life.
      ", "Thirukkural"),
      __(" 328.
      Though great the gain of good should seem, the wise
      Will any gain by staughter won despise.
      <br><b>Exp:</b> The advantage which might flow from destroying life in sacrifice, is dishonourable to the wise (who renounced the world), even although it should be said to be productive of great good.
      ", "Thirukkural"),
      __(" 329.
      Whose trade is 'killing', always vile they show,
      To minds of them who what is vileness know.
      <br><b>Exp:</b> Men who destroy life are base men, in the estimation of those who know the nature of meanness.
      ", "Thirukkural"),
      __(" 330.
      Who lead a loathed life in bodies sorely pained,
      Are men, the wise declare, by guilt of slaughter stained.
      <br><b>Exp:</b> (The wise) will say that men of diseased bodies, who live in degradation and in poverty, are those who separated the life from the body of animals (in a former birth).
      ", "Thirukkural"),

        // 1.3.10 Instability

      __(" 331.
      Lowest and meanest lore, that bids men trust secure,
      In things that pass away, as things that shall endure!
      <br><b>Exp:</b> That ignorance which considers those things to be stable which are not so, is dishonourable (to the wise).
      ", "Thirukkural"),
      __(" 332.
      As crowds round dancers fill the hall, is wealth's increase;
      Its loss, as throngs dispersing, when the dances cease.
      <br><b>Exp:</b> The acquisition of wealth is like the gathering together of an assembly for a theatre; its expenditure is like the breaking up of that assembly.
      ", "Thirukkural"),
      __(" 333.
      Unenduring is all wealth; if you wealth enjoy,
      Enduring works in working wealth straightway employ.
      <br><b>Exp:</b> Wealth is perishable; let those who obtain it immediately practise those (virtues) which are
      imperishable.
      ", "Thirukkural"),
      __(" 334.
      As 'day' it vaunts itself; well understood, 'tis knife',
      That daily cuts away a portion from thy life.
      <br><b>Exp:</b> Time, which shows itself (to the ignorant) as if it were something (real) is in the estimation of the wise (only) a saw which cuts down life.
      ", "Thirukkural"),
      __(" 335.
      Before the tongue lie powerless, 'mid the gasp of gurgling breath,
      Arouse thyself, and do good deeds beyond the power of death.
      <br><b>Exp:</b> Let virtuous deeds be done quickly, before the biccup comes making the tongue silent.
      ", "Thirukkural"),
      __(" 336.
      Existing yesterday, today to nothing hurled!-
      Such greatness owns this transitory world.
      <br><b>Exp:</b> This world possesses the greatness that one who yesterday was is not today.
      ", "Thirukkural"),
      __(" 337.
      Who know not if their happy lives shall last the day,
      In fancies infinite beguile the hours away!
      <br><b>Exp:</b> Innumerable are the thoughts which occupy the mind of (the unwise), who know not that they shall live another moment.
      ", "Thirukkural"),
      __(" 338.
      Birds fly away, and leave the nest deserted bare;
      Such is the short-lived friendship soul and body share.
      <br><b>Exp:</b> The love of the soul to the body is like (the love of) a bird to its egg which it flies away from and leaves empty.
      ", "Thirukkural"),
      __(" 339.
      Death is sinking into slumbers deep;
      Birth again is waking out of sleep.
      <br><b>Exp:</b> Death is like sleep; birth is like awaking from it.
      ", "Thirukkural"),
      __(" 340.
      The soul in fragile shed as lodger courts repose:-
      Is it because no home's conclusive rest it knows?
      <br><b>Exp:</b> It seems as if the soul, which takes a temporary shelter in a body, had not attained a home.
      ", "Thirukkural"),

      // 1.3.11 Renunciation

      __(" 341.
      From whatever, aye, whatever, man gets free,
      From what, aye, from that, no more of pain hath he!
      <br><b>Exp:</b> Whatever thing, a man has renounced, by that thing; he cannot suffer pain.
      ", "Thirukkural"),
      __(" 342.
      'Renunciation' made- ev'n here true pleasures men acquire;
      'Renounce' while time is yet, if to those pleasures you aspire.
      <br><b>Exp:</b> After a man has renounced (all things), there will still be many things in this world (which he may enjoy); if he should desire them, let him, while it is time abandon. (the world).
      ", "Thirukkural"),
      __(" 343.
      'Perceptions of the five' must all expire;-
      Relinquished in its order each desire
      <br><b>Exp:</b> Let the five senses be destroyed; and at the same time, let everything be abandoned that (the ascetic) has (formerly) desired.
      ", "Thirukkural"),
      __(" 344.
      'Privation absolute' is penance true;
      'Possession' brings bewilderment anew.
      <br><b>Exp:</b> To be altogether destitute is the proper condition of those who perform austerities; if they possess anything, it will change (their resolution) and bring them back to their confused state.
      ", "Thirukkural"),
      __(" 345.
      To those who sev'rance seek from being's varied strife,
      Flesh is burthen sore; what then other bonds of life?
      <br><b>Exp:</b> What means the addition of other things those who are attempting to cut off (future) births, when even their body is too much (for them).
      ", "Thirukkural"),
      __(" 346.
      Who kills conceit that utters 'I' and 'mine',
      Shall enter realms above the powers divine.
      He who destroys the pride which says \"I\", \"mine\" will enter a world which is difficult even to the Gods to attain.
      ", "Thirukkural"),
      __(" 347.
      Who cling to things that cling and eager clasp,
      Griefs cling to them with unrelaxing grasp.
      <br><b>Exp:</b> Sorrows will never let go their hold of those who give not up their hold of desire.
      ", "Thirukkural"),
      __(" 348.
      Who thoroughly 'renounce' on highest height are set;
      The rest bewildered, lie entangled in the net.
      <br><b>Exp:</b> Those who have entirely renounced (all things and all desire) have obtained (absorption into God); all others wander in confusion, entangled in the net of (many) births.
      ", "Thirukkural"),
      __(" 349.
      When that which clings falls off, severed is being's tie;
      All else will then be seen as instability.
      <br><b>Exp:</b> At the moment in which desire has been abandoned, (other) births will be cut off; when that has not been done, instability will be seen.
      ", "Thirukkural"),
      __(" 350.
      Cling thou to that which He, to Whom nought clings, hath bid thee cling,
      Cling to that bond, to get thee free from every clinging thing.
      <br><b>Exp:</b> Desire the desire of Him who is without desire; in order to renounce desire, desire that desire.
      ", "Thirukkural"),

      // 1.3.12 Knowledge of the True

      __(" 351.
      Of things devoid of truth as real things men deem;-
      Cause of degraded birth the fond delusive dream!
      <br><b>Exp:</b> Inglorious births are produced by the confusion (of mind) which considers those things to be real which are not real.
      ", "Thirukkural"),
      __(" 352.
      Darkness departs, and rapture springs to men who see,
      The mystic vision pure, from all delusion free.
      <br><b>Exp:</b> A clear, undimmed vision of things will deliver its possessors from the darkness of future births, and confer the felicity (of heaven).
      ", "Thirukkural"),
      __(" 353.
      When doubts disperse, and mists of error roll
      Away, nearer is heav'n than earth to sage's soul.
      <br><b>Exp:</b> Heaven is nearer than earth to those men of purified minds who are freed from from doubt.
      ", "Thirukkural"),
      __(" 354.
      Five-fold perception gained, what benefits accrue
      To them whose spirits lack perception of the true?
      <br><b>Exp:</b> Even those who have all the knowledge which can be attained by the five senses, will derive no
      benefit from it, if they are without a knowledge of the true nature of things.
      ", "Thirukkural"),
      __(" 355.
      Whatever thing, of whatsoever kind it be,
      'Tis wisdom's part in each the very thing to see.
      <br><b>Exp:</b> (True) knowledge is the perception concerning every thing of whatever kind, that that thing is the true thing.
      ", "Thirukkural"),
      __(" 356.
      Who learn, and here the knowledge of the true obtain,
      Shall find the path that hither cometh not again.
      <br><b>Exp:</b> They, who in this birth have learned to know the True Being, enter the road which returns not into this world.
      ", "Thirukkural"),
      __(" 357.
      The mind that knows with certitude what is, and ponders well,
      Its thoughts on birth again to other life need not to dwell.
      <br><b>Exp:</b> Let it not be thought that there is another birth for him whose mind having thoroughly considered (all it has been taught) has known the True Being.
      ", "Thirukkural"),
      __(" 358.
      When folly, cause of births, departs; and soul can view
      The truth of things, man's dignity- 'tis wisdom true.
      <br><b>Exp:</b> True knowledge consists in the removal of ignorance; which is (the cause of) births, and the
      perception of the True Being who is (the bestower of) heaven.
      ", "Thirukkural"),
      __(" 359.
      The true 'support' who knows- rejects 'supports' he sought beforeSorrow
      that clings all destroys, shall cling to him no more.
      <br><b>Exp:</b> He who so lives as to know Him who is the support of all things and abandon all desire, will be freed from the evils which would otherwise cleave to him and destroy (his efforts after absorption).
      ", "Thirukkural"),
      __(" 360.
      When lust and wrath and error's triple tyranny is o'er,
      Their very names for aye extinct, then pain shall be no more.
      <br><b>Exp:</b> If the very names of these three things, desire, anger, and confusion of mind, be destroyed, then will also perish evils (which flow from them).
      ", "Thirukkural"),

      // 1.3.8 The Extirpation of Desire

      __(" 361.
      The wise declare, through all the days, to every living thing.
      That ceaseless round of birth from seed of strong desire doth spring.
      <br><b>Exp:</b> (The wise) say that the seed, which produces unceasing births, at all times, to all creatures, is desire.
      ", "Thirukkural"),
      __(" 362.
      If desire you feel, freedom from changing birth require!
      'I' will come, if you desire to 'scape, set free from all desire.
      <br><b>Exp:</b> If anything be desired, freedom from births should be desired; that (freedom from births) will be attained by desiring to be without desire.
      ", "Thirukkural"),
      __(" 363.
      No glorious wealth is here like freedom from desire;
      To bliss like this not even there can soul aspire.
      <br><b>Exp:</b> There is in this world no excellence equal to freedom from desire; and even in that world, there is nothing like it.
      ", "Thirukkural"),
      __(" 364.
      Desire's decease as purity men know;
      That, too, from yearning search for truth will grow.
      <br><b>Exp:</b> Purity (of mind) consists in freedom from desire; and that (freedom from desire) is the fruit of the love of truth.
      ", "Thirukkural"),
      __(" 365.
      Men freed from bonds of strong desire are free;
      None other share such perfect liberty.
      <br><b>Exp:</b> They are said to be free (from future birth) who are freed from desire; all others (who, whatever else they may be free from, are not freed from desire) are not thus free.
      ", "Thirukkural"),
      __(" 366.
      Desire each soul beguiles;
      True virtue dreads its wiles.
      <br><b>Exp:</b> It is the chief duty of (an ascetic) to watch against desire with (jealous) fear; for it has power to deceive (and destroy) him.
      ", "Thirukkural"),
      __(" 367.
      Who thoroughly rids his life of passion-prompted deed,
      Deeds of unfailing worth shall do, which, as he plans, succeed.
      <br><b>Exp:</b> If a man thoroughly cut off all desire, the deeds, which confer immortality, will come to him, in the path in which he seeks them.
      ", "Thirukkural"),
      __(" 368.
      Affliction is not known where no desires abide;
      Where these are, endless rises sorrow's tide.
      <br><b>Exp:</b> There is no sorrow to those who are without desire; but where that is, (sorrow) will incessantly come, more and more.
      ", "Thirukkural"),
      __(" 369.
      When dies away desire, that woe of woes
      Ev'n here the soul unceasing rapture knows.
      <br><b>Exp:</b> Even while in this body, joy will never depart (from the mind, in which) desire, that sorrow of
      sorrows, has been destroyed.
      ", "Thirukkural"),
      __(" 370.
      Drive from thy soul desire insatiate;
      Straight'way is gained the moveless blissful state.
      <br><b>Exp:</b> The removal of desire, whose nature it is never to be satisfied, will immediately confer a nature that can never be changed.
      ", "Thirukkural"),

      // 1.4 Fate
      // 1.4.1 Fate

      __(" 371.
      Wealth-giving fate power of unflinching effort brings;
      From fate that takes away idle remissness springs.
      <br><b>Exp:</b> Perseverance comes from a prosperous fate, and idleness from an adverse fate.
      ", "Thirukkural"),
      __(" 372.
      The fate that loss ordains makes wise men's wisdom foolishness;
      The fate that gain bestows with ampler powers will wisdom bless.
      <br><b>Exp:</b> An adverse fate produces folly, and a prosperous fate produces enlarged knowledge.
      ", "Thirukkural"),
      __(" 373.
      In subtle learning manifold though versed man be,
      'The wisdom, truly his, will gain supremacy.
      <br><b>Exp:</b> Although (a man) may study the most polished treatises, the knowledge which fate has decreed to him will still prevail.
      ", "Thirukkural"),
      __(" 374.
      Two fold the fashion of the world: some live in fortune's light;
      While other some have souls in wisdom's radiance bright.
      <br><b>Exp:</b> There are (through fate) two different natures in the world, hence the difference (observable in men) in (their acquisition of) wealth, and in their attainment of knowledge.
      ", "Thirukkural"),
      __(" 375.
      All things that good appear will oft have ill success;
      All evil things prove good for gain of happiness.
      <br><b>Exp:</b> In the acquisition of property, every thing favourable becomes unfavourable, and (on the other hand) everything unfavourable becomes favourable, (through the power of fate).
      ", "Thirukkural"),
      __(" 376.
      Things not your own will yield no good, howe'er you guard with pain;
      Your own, howe'er you scatter them abroad, will yours remain.
      <br><b>Exp:</b> Whatever is not conferred by fate cannot be preserved although it be guarded with most painful care;and that, which fate has made his, cannot be lost, although one should even take it and throw it away.
      ", "Thirukkural"),
      __(" 377.
      Save as the 'sharer' shares to each in due degree,
      To those who millions store enjoyment scarce can be.
      <br><b>Exp:</b> Even those who gather together millions will only enjoy them, as it has been determined by the
      disposer (of all things).
      ", "Thirukkural"),
      __(" 378.
      The destitute with ascetics merit share,
      If fate to visit with predestined ills would spare.
      <br><b>Exp:</b> The destitute will renounce desire (and become ascetics), if (fate) do not make them suffer the
      hindrances to which they are liable, and they pass away.
      ", "Thirukkural"),
      __(" 379.
      When good things come, men view them all as gain;
      When evils come, why then should they complain?
      <br><b>Exp:</b> How is it that those, who are pleased with good fortune, trouble themselves when evil comes, (since
      both are equally the decree of fate) ?", "Thirukkural"),
      __("380.
      What powers so great as those of Destiny? Man's skill
      Some other thing contrives; but fate's beforehand still.
      <br><b>Exp:</b> What is stronger than fate ? If we think of an expedient (to avert it), it will itself be with us before (the thought).", "Thirukkural"),

      // PART II. WEALTH
      // 2.1 Royalty
      // 2.1.1 The Greatness of a King

      __(" 381.
      An army, people, wealth, a minister, friends, fort: six thingsWho
      owns them all, a lion lives amid the kings.
      <br><b>Exp:</b> He who possesses these six things, an army, a people, wealth, ministers, friends and a fortress, is a lion among kings.", "Thirukkural"),
      __(" 382.
      Courage, a liberal hand, wisdom, and energy: these four
      Are qualities a king adorn for evermore.
      <br><b>Exp:</b> Never to fail in these four things, fearlessness, liberality, wisdom, and energy, is the kingly
      character.
      ", "Thirukkural"),
      __(" 383.
      A sleepless promptitude, knowledge, decision strong:
      These three for aye to rulers of the land belong.
      <br><b>Exp:</b> These three things, viz., vigilance, learning, and bravery, should never be wanting in the ruler of a country.
      ", "Thirukkural"),
      __(" 384.
      Kingship, in virtue failing not, all vice restrains,
      In courage failing not, it honour's grace maintains.
      <br><b>Exp:</b> He is a king who, with manly modesty, swerves not from virtue, and refrains from vice.
      ", "Thirukkural"),
      __(" 385.
      A king is he who treasure gains, stores up, defends,
      And duly for his kingdom's weal expends.
      <br><b>Exp:</b> He is a king who is able to acquire (wealth), to lay it up, to guard, and to distribute it.
      ", "Thirukkural"),
      __(" 386.
      Where king is easy of access, where no harsh word repels,
      That land's high praises every subject swells.
      <br><b>Exp:</b> The whole world will exalt the country of the king who is easy of access, and who is free from harsh language.
      ", "Thirukkural"),
      __(" 387.
      With pleasant speech, who gives and guards with powerful liberal hand,
      He sees the world obedient all to his command.
      <br><b>Exp:</b> The world will praise and submit itself to the mind of the king who is able to give with affability, and to protect all who come to him.
      ", "Thirukkural"),
      __(" 388.
      Who guards the realm and justice strict maintains,
      That king as god o'er subject people reigns.
      <br><b>Exp:</b> That king, will be esteemed a God among men, who performs his own duties, and protects (his
      subjects).
      ", "Thirukkural"),
      __(" 389.
      The king of worth, who can words bitter to his ear endure,
      Beneath the shadow of his power the world abides secure.
      <br><b>Exp:</b> The whole world will dwell under the umbrella of the king, who can bear words that embitter the ear.
      ", "Thirukkural"),
      __(" 390.
      Gifts, grace, right sceptre, care of people's weal;
      These four a light of dreaded kings reveal.
      <br><b>Exp:</b> He is the light of kings who has there four things, beneficence, benevolence, rectitude, and care for his people.
      ", "Thirukkural"),

      // 2.1.2 Learning

      __(" 391.
      So learn that you may full and faultless learning gain,
      Then in obedience meet to lessons learnt remain.
      <br><b>Exp:</b> Let a man learn thoroughly whatever he may learn, and let his conduct be worthy of his learning.
      ", "Thirukkural"),
      __(" 392.
      The twain that lore of numbers and of letters give
      Are eyes, the wise declare, to all on earth that live.
      <br><b>Exp:</b> Letters and numbers are the two eyes of man.
      ", "Thirukkural"),
      __(" 393.
      Men who learning gain have eyes, men say;
      Blockheads' faces pairs of sores display.
      <br><b>Exp:</b> The learned are said to have eyes, but the unlearned have (merely) two sores in their face.
      ", "Thirukkural"),
      __(" 394.
      You meet with joy, with pleasant thought you part;
      Such is the learned scholar's wonderous art!
      <br><b>Exp:</b> It is the part of the learned to give joy to those whom they meet, and on leaving, to make them think (Oh! when shall we meet them again.)
      ", "Thirukkural"),
      __(" 395.
      With soul submiss they stand, as paupers front a rich man's face;
      Yet learned men are first; th'unlearned stand in lowest place.
      <br><b>Exp:</b> The unlearned are inferior to the learned, before whom they stand begging, as the destitute before the wealthy.
      ", "Thirukkural"),
      __(" 396.
      In sandy soil, when deep you delve, you reach the springs below;
      The more you learn, the freer streams of wisdom flow.
      <br><b>Exp:</b> Water will flow from a well in the sand in proportion to the depth to which it is dug, and knowledge will flow from a man in proportion to his learning.
      ", "Thirukkural"),
      __(" 397.
      The learned make each land their own, in every city find a home;
      Who, till they die; learn nought, along what weary ways they roam!
      <br><b>Exp:</b> How is it that any one can remain without learning, even to his death, when (to the learned man) every country is his own (country), and every town his own (town) ?
      ", "Thirukkural"),
      __(" 398.
      The man who store of learning gains,
      In one, through seven worlds, bliss attains.
      <br><b>Exp:</b> The learning, which a man has acquired in one birth, will yield him pleasure during seven births.", "Thirukkural"),
      __(" 399.
      Their joy is joy of all the world, they see; thus more
      The learners learn to love their cherished lore.
      <br><b>Exp:</b> The learned will long (for more learning), when they see that while it gives pleasure to themselves, the world also derives pleasure from it.
      ", "Thirukkural"),
      __(" 400.
      Learning is excellence of wealth that none destroy;
      To man nought else affords reality of joy.
      <br><b>Exp:</b> Learning is the true imperishable riches; all other things are not riches.
      ", "Thirukkural"),

      // 2.1.3 Ignorance

      __(" 401.
      Like those at draughts would play without the chequered square,
      Men void of ample lore would counsels of the learned share.
      <br><b>Exp:</b> To speak in an assembly (of the learned) without fullness of knowledge, is like playing at chess (on a board) without squares.
      ", "Thirukkural"),
      __(" 402.
      Like those who doat on hoyden's undeveloped charms are they,
      Of learning void, who eagerly their power of words display.
      <br><b>Exp:</b> The desire of the unlearned to speak (in an assembly), is like a woman without breasts desiring (the enjoyment of ) woman-hood.
      ", "Thirukkural"),
      __(" 403.
      The blockheads, too, may men of worth appear,
      If they can keep from speaking where the learned hear!
      <br><b>Exp:</b> The unlearned also are very excellent men, if they know how to keep silence before the learned.
      ", "Thirukkural"),
      __(" 404.
      From blockheads' lips, when words of wisdom glibly flow,
      The wise receive them not, though good they seem to show.
      <br><b>Exp:</b> Although the natural knowledge of an unlearned man may be very good, the wise will not accept for true knowledge.
      ", "Thirukkural"),
      __(" 405.
      As worthless shows the worth of man unlearned,
      When council meets, by words he speaks discerned.
      <br><b>Exp:</b> The self-conceit of an unlearned man will fade away, as soon as he speaks in an assembly (of
      thelearned).
      ", "Thirukkural"),
      __(" 406.
      'They are': so much is true of men untaught;
      But, like a barren field, they yield us nought!
      <br><b>Exp:</b> The unlearned are like worthless barren land: all that can be said of them is, that they exist.
      ", "Thirukkural"),
      __(" 407.
      Who lack the power of subtle, large, and penetrating sense,
      Like puppet, decked with ornaments of clay, their beauty's vain pretence.
      <br><b>Exp:</b> The beauty and goodness of one who is destitute of knowledge by the study of great and exquisite works, is like (the beauty and goodness) of a painted earthen doll.
      ", "Thirukkural"),
      __(" 408.
      To men unlearned, from fortune's favour greater-evil springs
      Than poverty to men of goodly wisdom brings.
      <br><b>Exp:</b> Wealth, gained by the unlearned, will give more sorrow than the poverty which may come upon the
      learned.
      ", "Thirukkural"),
      __(" 409.
      Lower are men unlearned, though noble be their race,
      Than low-born men adorned with learning's grace.
      <br><b>Exp:</b> The unlearned, though born in a high caste, are not equal in dignity to the learned; though they may have been born in a low caste.
      ", "Thirukkural"),
      __(" 410.
      Learning's irradiating grace who gain,
      Others excel, as men the bestial train.
      <br><b>Exp:</b> As beasts by the side of men, so are other men by the side of those who are learned in celebrated works.
      ", "Thirukkural"),

      // 2.1.4 Hearing

      __(" 411.
      Wealth of wealth is wealth acquired be ear attent;
      Wealth mid all wealth supremely excellent.
      <br><b>Exp:</b> Wealth (gained) by the ear is wealth of wealth; that wealth is the chief of all wealth.
      ", "Thirukkural"),
      __(" 412.
      When 'tis no longer time the listening ear to feed
      With trifling dole of food supply the body's need.
      <br><b>Exp:</b> When there is no food for the ear, give a little also to the stomach.
      ", "Thirukkural"),
      __(" 413.
      Who feed their ear with learned teachings rare,
      Are like the happy gods oblations rich who share.
      <br><b>Exp:</b> Those who in this world enjoy instruction which is the food of the ear, are equal to the Gods, who enjoy the food of the sacrifices.
      ", "Thirukkural"),
      __(" 414.
      Though learning none hath he, yet let him hear alway:
      In weakness this shall prove a staff and stay.
      <br><b>Exp:</b> Although a man be without learning, let him listen (to the teaching of the learned); that will be to him a staff in adversity.
      ", "Thirukkural"),
      __(" 415.
      Like staff in hand of him in slippery ground who strays
      Are words from mouth of those who walk in righteous ways.
      <br><b>Exp:</b> The words of the good are like a staff in a slippery place.
      ", "Thirukkural"),
      __(" 416.
      Let each man good things learn, for e'en as he
      Shall learn, he gains increase of perfect dignity.
      <br><b>Exp:</b> Let a man listen, never so little, to good (instruction), even that will bring him great dignity.
      ", "Thirukkural"),
      __(" 417.
      Not e'en through inadvertence speak they foolish word,
      With clear discerning mind who've learning's ample lessons heard.
      <br><b>Exp:</b> Not even when they have imperfectly understood (a matter), will those men speak foolishly, who
      have profoundly studied and diligently listened (to instruction).
      ", "Thirukkural"),
      __(" 418.
      Where teaching hath not oped the learner's ear,
      The man may listen, but he scarce can hear.
      <br><b>Exp:</b> The ear which has not been bored by instruction, although it hears, is deaf.
      ", "Thirukkural"),
      __(" 419.
      'Tis hard for mouth to utter gentle, modest word,
      When ears discourse of lore refined have never heard.
      <br><b>Exp:</b> It is a rare thing to find modesty, a reverend mouth- with those who have not received choice
      instruction.
      ", "Thirukkural"),
      __(" 420.
      His mouth can taste, but ear no taste of joy can give!
      What matter if he die, or prosperous live?
      <br><b>Exp:</b> What does it matter whether those men live or die, who can judge of tastes by the mouth, and not by the ear ?
      ", "Thirukkural"),

      // 2.1.5 The Possession of Knowledge

      __(" 421.
      True wisdom wards off woes, A circling fortress high;
      Its inner strength man's eager foes Unshaken will defy.
      <br><b>Exp:</b> Wisdom is a weapon to ward off destruction; it is an inner fortress which enemies cannot destroy.
      ", "Thirukkural"),
      __(" 422.
      Wisdom restrains, nor suffers mind to wander where it would;
      From every evil calls it back, and guides in way of good.
      <br><b>Exp:</b> Not to permit the mind to go where it lists, to keep it from evil, and to employ it in good, this is wisdom.
      ", "Thirukkural"),
      __(" 423.
      Though things diverse from divers sages' lips we learn,
      'Tis wisdom's part in each the true thing to discern.
      <br><b>Exp:</b> To discern the truth in every thing, by whomsoever spoken, is wisdom.
      ", "Thirukkural"),
      __(" 424.
      Wisdom hath use of lucid speech, words that acceptance win,
      And subtle sense of other men's discourse takes in.
      <br><b>Exp:</b> To speak so as that the meaning may easily enter the mind of the hearer, and to discern the subtlest thought which may lie hidden in the words of others, this is wisdom.
      ", "Thirukkural"),
      __(" 425.
      Wisdom embraces frank the world, to no caprice exposed;
      Unlike the lotus flower, now opened wide, now petals strictly closed.
      <br><b>Exp:</b> To secure the friendship of the great is true wisdom; it is (also) wisdom to keep (that friendship unchanged, and) not opening and closing (like the lotus flower).
      ", "Thirukkural"),
      __(" 426.
      As dwells the world, so with the world to dwell
      In harmony- this is to wisely live and well.
      <br><b>Exp:</b> To live as the world lives, is wisdom.
      ", "Thirukkural"),
      __(" 427.
      The wise discern, the foolish fail to see,
      And minds prepare for things about to be.
      <br><b>Exp:</b> The wise are those who know beforehand what will happen; those who do not know this are the
      unwise.
      ", "Thirukkural"),
      __(" 428.
      Folly meets fearful ills with fearless heart;
      To fear where cause of fear exists is wisdom's part.
      <br><b>Exp:</b> Not to fear what ought to be feared, is folly; it is the work of the wise to fear what should be feared.
      ", "Thirukkural"),
      __(" 429.
      The wise with watchful soul who coming ills foresee;
      From coming evil's dreaded shock are free.
      <br><b>Exp:</b> No terrifying calamity will happen to the wise, who (foresee) and guard against coming evils.
      ", "Thirukkural"),
      __(" 430.
      The wise is rich, with ev'ry blessing blest;
      The fool is poor, of everything possessed.
      <br><b>Exp:</b> Those who possess wisdom, possess every thing; those who have not wisdom, whatever they may
      possess, have nothing.
      ", "Thirukkural"),

      // 2.1.6 The Correction of Faults

      __(" 431.
      Who arrogance, and wrath, and littleness of low desire restrain,
      To sure increase of lofty dignity attain.
      <br><b>Exp:</b> Truly great is the excellence of those (kings) who are free from pride, anger, and lust.
      ", "Thirukkural"),
      __(" 432.
      A niggard hand, o'erweening self-regard, and mirth
      Unseemly, bring disgrace to men of kingly brith.
      <br><b>Exp:</b> Avarice, undignified pride, and low pleasures are faults in a king.
      ", "Thirukkural"),
      __(" 433.
      Though small as millet-seed the fault men deem;
      As palm tree vast to those who fear disgrace 'twill seem.
      <br><b>Exp:</b> Those who fear guilt, if they commit a fault small as a millet seed, will consider it to be as large as a palmyra tree.
      ", "Thirukkural"),
      __(" 434.
      Freedom from faults is wealth; watch heedfully
      'Gainst these, for fault is fatal enmity.
      <br><b>Exp:</b> Guard against faults as a matter (of great consequence; for) faults are a deadly enemy.
      ", "Thirukkural"),
      __(" 435.
      His joy who guards not 'gainst the coming evil day,
      Like straw before the fire shall swift consume away.
      <br><b>Exp:</b> The prosperity of him who does not timely guard against faults, will perish like straw before fire.
      ", "Thirukkural"),
      __(" 436.
      Faultless the king who first his own faults cures, and then
      Permits himself to scan faults of other men.
      <br><b>Exp:</b> What fault will remain in the king who has put away his own evils, and looks after the evils of others.
      ", "Thirukkural"),
      __(" 437.
      Who leaves undone what should be done, with niggard mind,
      His wealth shall perish, leaving not a wrack behind.
      <br><b>Exp:</b> The wealth of the avaricious man, who does not expend it for the purposes for which he ought to
      expend it will waste away and not continue.
      ", "Thirukkural"),
      __(" 438.
      The greed of soul that avarice men call,
      When faults are summed, is worst of all.
      <br><b>Exp:</b> Griping avarice is not to be reckoned as one among other faults; (it stands alone - greater than all).
      ", "Thirukkural"),
      __(" 439.
      Never indulge in self-complaisant mood,
      Nor deed desire that yields no gain of good.
      <br><b>Exp:</b> Let no (one) praise himself, at any time; let him not desire to do useless things.
      ", "Thirukkural"),
      __(" 440.
      If, to your foes unknown, you cherish what you love,
      Counsels of men who wish you harm will harmless prove.
      <br><b>Exp:</b> If (a king) enjoys, privately the things which he desires, the designs of his enemies will be useless.
      ", "Thirukkural"),

      // 2.1.7 Seeking the Aid of Great Men

      __(" 441.
      As friends the men who virtue know, and riper wisdom share,
      Their worth weighed well, the king should choose with care.
      <br><b>Exp:</b> Let (a king) ponder well its value, and secure the friendship of men of virtue and of mature
      knowledge.
      ", "Thirukkural"),
      __(" 442.
      Cherish the all-accomplished men as friends,
      Whose skill the present ill removes, from coming ill defends.
      <br><b>Exp:</b> Let (a king) procure and kindly care for men who can overcome difficulties when they occur, and
      guard against them before they happen.
      ", "Thirukkural"),
      __(" 443.
      To cherish men of mighty soul, and make them all their own,
      Of kingly treasures rare, as rarest gift is known.
      <br><b>Exp:</b> To cherish great men and make them his own, is the most difficult of all difficult things.
      ", "Thirukkural"),
      __(" 444.
      To live with men of greatness that their own excels,
      As cherished friends, is greatest power that with a monarch dwells.
      <br><b>Exp:</b> So to act as to make those men, his own, who are greater than himself is of all powers the highest.
      ", "Thirukkural"),
      __(" 445.
      The king, since counsellors are monarch's eyes,
      Should counsellors select with counsel wise.
      <br><b>Exp:</b> As a king must use his ministers as eyes (in managing his kingdom), let him well examine their
      character and qualifications before he engages them.
      ", "Thirukkural"),
      __(" 446.
      The king, who knows to live with worthy men allied,
      Has nought to fear from any foeman's pride.
      <br><b>Exp:</b> There will be nothing left for enemies to do, against him who has the power of acting (so as to secure)
      the fellowship of worthy men.
      ", "Thirukkural"),
      __(" 447.
      What power can work his fall, who faithful ministers
      Employs, that thunder out reproaches when he errs.
      <br><b>Exp:</b> Who are great enough to destroy him who has servants that have power to rebuke him ?
      ", "Thirukkural"),
      __(" 448.
      The king with none to censure him, bereft of safeguards all,
      Though none his ruin work, shall surely ruined fall.
      <br><b>Exp:</b> The king, who is without the guard of men who can rebuke him, will perish, even though there be no one to destroy him.
      ", "Thirukkural"),
      __(" 449.
      Who owns no principal, can have no gain of usury;
      Who lacks support of friends, knows no stability.
      <br><b>Exp:</b> There can be no gain to those who have no capital; and in like manner there can be no permanence to those who are without the support of adherents.
      ", "Thirukkural"),
      __(" 450.
      Than hate of many foes incurred, works greater woe
      Ten-fold, of worthy men the friendship to forego.
      <br><b>Exp:</b> It is tenfold more injurious to abandon the friendship of the good, than to incur the hatred of the many.
      ", "Thirukkural"),

      // 2.1.8. Avoiding mean Associations

      __(" 451.
      The great of soul will mean association fear;
      The mean of soul regard mean men as kinsmen dear.
      <br><b>Exp:</b> (True) greatness fears the society of the base; it is only the low - minded who will regard them as
      friends.
      ", "Thirukkural"),
      __(" 452.
      The waters' virtues change with soil through which they flow;
      As man's companionship so will his wisdom show.
      <br><b>Exp:</b> As water changes (its nature), from the nature of the soil (in which it flows), so will the character of men resemble that of their associates.
      ", "Thirukkural"),
      __(" 453.
      Perceptions manifold in men are of the mind alone;
      The value of the man by his companionship is known.
      <br><b>Exp:</b> The power of knowing is from the mind; (but) his character is from that of his associates.
      ", "Thirukkural"),
      __(" 454.
      Man's wisdom seems the offspring of his mind;
      'Tis outcome of companionship we find.
      <br><b>Exp:</b> Wisdom appears to rest in the mind, but it really exists to a man in his companions.
      ", "Thirukkural"),
      __(" 455.
      Both purity of mind, and purity of action clear,
      Leaning no staff of pure companionship, to man draw near.
      <br><b>Exp:</b> Chaste company is the staff on which come, these two things, viz, purity of mind and purity of conduct.
      ", "Thirukkural"),
      __(" 456.
      From true pure-minded men a virtuous race proceeds;
      To men of pure companionship belong no evil deeds.
      <br><b>Exp:</b> To the pure-minded there will be a good posterity. By those whose associates are pure, no deeds will be done that are not good.
      ", "Thirukkural"),
      __(" 457.
      Goodness of mind to lives of men increaseth gain;
      And good companionship doth all of praise obtain.
      <br><b>Exp:</b> Goodness of mind will give wealth, and good society will bring with it all praise, to men.
      ", "Thirukkural"),
      __(" 458.
      To perfect men, though minds right good belong,
      Yet good companionship is confirmation strong.
      <br><b>Exp:</b> Although they may have great (natural) goodness of mind, yet good society will tend to strengthen it.
      ", "Thirukkural"),
      __(" 459.
      Although to mental goodness joys of other life belong,
      Yet good companionship is confirmation strong.
      <br><b>Exp:</b> Future bliss is (the result) of goodness of mind; and even this acquires strength from the society of the good.
      ", "Thirukkural"),
      __(" 460.
      Than good companionship no surer help we know;
      Than bad companionship nought causes direr woe.
      <br><b>Exp:</b> There is no greater help than the company of the good; there is no greater source of sorrow than the company of the wicked.
      ", "Thirukkural"),

      // 2.1.9. Acting after due Consideration

      __(" 461.
      Expenditure, return, and profit of the deed
      In time to come; weigh these- than to the act proceed.
      <br><b>Exp:</b> Let a man reflect on what will be lost, what will be acquired and (from these) what will be his ultimate gain, and (then, let him) act.", "Thirukkural"),
      __(" 462.
      With chosen friends deliberate; next use the private thought;
      Then act. By those who thus proceed all works with ease are wrought.
      <br><b>Exp:</b> There is nothing too difficult to (be attained by) those who, before they act, reflect well themselves, and thoroughly consider (the matter) with chosen friends.
      ", "Thirukkural"),
      __(" 463.
      To risk one's all and lose, aiming at added gain,
      Is rash affair, from which the wise abstain.
      <br><b>Exp:</b> Wise men will not, in the hopes of profit, undertake works that will consume their principal.
      ", "Thirukkural"),
      __(" 464.
      A work of which the issue is not clear,
      Begin not they reproachful scorn who fear.
      <br><b>Exp:</b> Those who fear reproach will not commence anything which has not been (thoroughly considered)
      and made clear to them.
      ", "Thirukkural"),
      __(" 465.
      With plans not well matured to rise against your foe,
      Is way to plant him out where he is sure to grow!
      <br><b>Exp:</b> One way to promote the prosperity of an enemy, is (for a king) to set out (to war) without having thoroughly weighed his ability (to cope with its chances).
      ", "Thirukkural"),
      __(" 466.
      'Tis ruin if man do an unbefitting thing;
      Fit things to leave undone will equal ruin bring.
      <br><b>Exp:</b> He will perish who does not what is not fit to do; and he also will perish who does not do what it is fit to do.
      ", "Thirukkural"),
      __(" 467.
      Think, and then dare the deed! Who cry,
      'Deed dared, we'll think,' disgraced shall be.
      <br><b>Exp:</b> Consider, and then undertake a matter; after having undertaken it, to say \"We will consider,\" is folly.
      ", "Thirukkural"),
      __(" 468.
      On no right system if man toil and strive,
      Though many men assist, no work can thrive.
      <br><b>Exp:</b> The work, which is not done by suitable methods, will fail though many stand to uphold it.
      ", "Thirukkural"),
      __(" 469.
      Though well the work be done, yet one mistake is made,
      To habitudes of various men when no regard is paid.
      <br><b>Exp:</b> There are failures even in acting well, when it is done without knowing the various dispositions of men.
      ", "Thirukkural"),
      __(" 470.
      Plan and perform no work that others may despise;
      What misbeseems a king the world will not approve as wise.
      <br><b>Exp:</b> Let a man reflect, and do things which bring no reproach; the world will not approve, with him, of things which do not become of his position to adopt.
      ", "Thirukkural"),

      // 2.1.10. The Knowledge of Power

      __(" 471.
      The force the strife demands, the force he owns, the force of foes,
      The force of friends; these should he weigh ere to the war he goes.
      <br><b>Exp:</b> Let (one) weigh well the strength of the deed (he purposes to do), his own strength, the strength of his enemy, and the strength of the allies (of both), and then let him act.
      ", "Thirukkural"),
      __(" 472.
      Who know what can be wrought, with knowledge of the means, on this,
      Their mind firm set, go forth, nought goes with them amiss.
      <br><b>Exp:</b> There is nothing which may not be accomplished by those who, before they attack (an enemy), make themselves acquainted with their own ability, and with whatever else is (needful) to be known, and
      apply themselves wholly to their object.
      ", "Thirukkural"),
      __(" 473.
      Ill-deeming of their proper powers, have many monarchs striven,
      And midmost of unequal conflict fallen asunder riven.
      <br><b>Exp:</b> There are many who, ignorant of their (want of) power (to meet it), have haughtily set out to war, and broken down in the midst of it.
      ", "Thirukkural"),
      __(" 474.
      Who not agrees with those around, no moderation knows,
      In self-applause indulging, swift to ruin goes.
      <br><b>Exp:</b> He will quickly perish who, ignorant of his own resources flatters himself of his greatness, and does not live in peace with his neighbours.
      ", "Thirukkural"),
      __(" 475.
      With peacock feathers light, you load the wain;
      Yet, heaped too high, the axle snaps in twain.
      <br><b>Exp:</b> The axle tree of a bandy, loaded only with peacocks' feathers will break, if it be greatly overloaded.
      ", "Thirukkural"),
      __(" 476.
      Who daring climbs, and would himself upraise
      Beyond the branch's tip, with life the forfeit pays.
      <br><b>Exp:</b> There will be an end to the life of him who, having climbed out to the end of a branch, ventures to go further.
      ", "Thirukkural"),
      __(" 477.
      With knowledge of the measure due, as virtue bids you give!
      That is the way to guard your wealth, and seemly live.
      <br><b>Exp:</b> Let a man know the measure of his ability (to give), and let him give accordingly; such giving is the way to preserve his property.
      ", "Thirukkural"),
      __(" 478.
      Incomings may be scant; but yet, no failure there,
      If in expenditure you rightly learn to spare.
      <br><b>Exp:</b> Even though the income (of a king) be small, it will not cause his (ruin), if his outgoings be not larger than his income.
      ", "Thirukkural"),
      __(" 479.
      Who prosperous lives and of enjoyment knows no bound,
      His seeming wealth, departing, nowhere shall be found.
      <br><b>Exp:</b> The prosperity of him who lives without knowing the measure (of his property), will perish, even while it seems to continue.
      ", "Thirukkural"),
      __(" 480.
      Beneficence that measures not its bound of means,
      Will swiftly bring to nought the wealth on which it leans.
      <br><b>Exp:</b> The measure of his wealth will quickly perish, whose liberality weighs not the measure of his
      property.
      ", "Thirukkural"),

      // 2.1.11. Knowing the fitting Time

      __(" 481.
      A crow will conquer owl in broad daylight;
      The king that foes would crush, needs fitting time to fight.
      <br><b>Exp:</b> A crow will overcome an owl in the day time; so the king who would conquer his enemy must have (a suitable) time.
      ", "Thirukkural"),
      __(" 482.
      The bond binds fortune fast is ordered effort made,
      Strictly observant still of favouring season's aid.
      <br><b>Exp:</b> Acting at the right season, is a cord that will immoveably bind success (to a king).
      ", "Thirukkural"),
      __(" 483.
      Can any work be hard in very fact,
      If men use fitting means in timely act?
      <br><b>Exp:</b> Is there anything difficult for him to do, who acts, with (the right) instruments at the right time ?
      ", "Thirukkural"),
      __(" 484.
      The pendant world's dominion may be won,
      In fitting time and place by action done.
      <br><b>Exp:</b> Though (a man) should meditate (the conquest of) the world, he may accomplish it if he acts in the right time, and at the right place.
      ", "Thirukkural"),
      __(" 485.
      Who think the pendant world itself to subjugate,
      With mind unruffled for the fitting time must wait.
      <br><b>Exp:</b> They who thoughtfully consider and wait for the (right) time (for action), may successfully meditate (the conquest of) the world.
      ", "Thirukkural"),
      __(" 486.
      The men of mighty power their hidden energies repress,
      As fighting ram recoils to rush on foe with heavier stress.
      <br><b>Exp:</b> The self-restraint of the energetic (while waiting for a suitable opportunity), is like the drawing back of a fighting-ram in order to butt.
      ", "Thirukkural"),
      __(" 487.
      The glorious once of wrath enkindled make no outward show,
      At once; they bide their time, while hidden fires within them glow.
      <br><b>Exp:</b> The wise will not immediately and hastily shew out their anger; they will watch their time, and
      restrain it within.
      ", "Thirukkural"),
      __(" 488.
      If foes' detested form they see, with patience let them bear;
      When fateful hour at last they spy,- the head lies there.
      <br><b>Exp:</b> If one meets his enemy, let him show him all respect, until the time for his destruction is come; when that is come, his head will be easily brought low.
      ", "Thirukkural"),
      __(" 489.
      When hardest gain of opportunity at last is won,
      With promptitude let hardest deed be done.
      <br><b>Exp:</b> If a rare opportunity occurs, while it lasts, let a man do that which is rarely to be accomplished (but for such an opportunity).
      ", "Thirukkural"),
      __(" 490.
      As heron stands with folded wing, so wait in waiting hour;
      As heron snaps its prey, when fortune smiles, put forth your power.
      <br><b>Exp:</b> At the time when one should use self-control, let him restrain himself like a heron; and, let him like it, strike, when there is a favourable opportunity.
      ", "Thirukkural"),

      // 2.1.12. Knowing the Place

      __(" 491.
      Begin no work of war, depise no foe,
      Till place where you can wholly circumvent you know.
      <br><b>Exp:</b> Let not (a king) despise (an enemy), nor undertake any thing (against him), until he has obtained (a suitable) place for besieging him.
      ", "Thirukkural"),
      __(" 492.
      Though skill in war combine with courage tried on battle-field,
      The added gain of fort doth great advantage yield.
      <br><b>Exp:</b> Even to those who are men of power and expedients, an attack in connection with a fortification will yield many advantages.
      ", "Thirukkural"),
      __(" 493.
      E'en weak ones mightily prevail, if place of strong defence,
      They find, protect themselves, and work their foes offence.
      <br><b>Exp:</b> Even the powerless will become powerful and conquer, if they select a proper field (of action), and guard themselves, while they make war on their enemies.
      ", "Thirukkural"),
      __(" 494.
      The foes who thought to triumph, find their thoughts were vain,
      If hosts advance, seize vantage ground, and thence the fight maintain.
      <br><b>Exp:</b> If they who draw near (to fight) choose a suitable place to approach (their enemy), the latter, will have to relinquish the thought which they once entertained, of conquering them.
      ", "Thirukkural"),
      __(" 495.
      The crocodile prevails in its own flow of water wide,
      If this it leaves, 'tis slain by anything beside.
      <br><b>Exp:</b> In deep water, a crocodile will conquer (all other animals); but if it leave the water, other animals will conquer it.
      ", "Thirukkural"),
      __(" 496.
      The lofty car, with mighty wheel, sails not o'er watery main,
      The boat that skims the sea, runs not on earth's hard plain.
      <br><b>Exp:</b> Wide chariots, with mighty wheels, will not run on the ocean; neither will ships that the traverse ocean, move on the earth.
      ", "Thirukkural"),
      __(" 497.
      Save their own fearless might they need no other aid,
      If in right place they fight, all due provision made.
      <br><b>Exp:</b> You will need no other aid than fearlessness, if you thoroughly reflect (on what you are to do), and select (a suitable) place for your operations.
      ", "Thirukkural"),
      __(" 498.
      If lord of army vast the safe retreat assail
      Of him whose host is small, his mightiest efforts fail.
      <br><b>Exp:</b> The power of one who has a large army will perish, if he goes into ground where only a small army can act.
      ", "Thirukkural"),
      __(" 499.
      Though fort be none, and store of wealth they lack,
      'Tis hard a people's homesteads to attack!
      <br><b>Exp:</b> It is a hazardous thing to attack men in their own country, although they may neither have power nor a good fortress.
      ", "Thirukkural"),
      __(" 500.
      The jackal slays, in miry paths of foot-betraying fen,
      The elephant of fearless eye and tusks transfixing armed men.
      <br><b>Exp:</b> A fox can kill a fearless, warrior-faced elephant, if it go into mud in which its legs sink down.
      ", "Thirukkural"),

      // 2.1.13. Selection and Confidence

      __(" 501.
      How treats he virtue, wealth and pleasure? How, when life's at stake,
      Comports himself? This four-fold test of man will full assurance make.
      <br><b>Exp:</b> Let (a minister) be chosen, after he has been tried by means of these four things, viz,-his virtue, (love of) money, (love of) sexual pleasure, and tear of (losing) life.
      ", "Thirukkural"),
      __(" 502.
      Of noble race, of faultless worth, of generous pride
      That shrinks from shame or stain; in him may king confide.
      <br><b>Exp:</b> (The king's) choice should (fall) on him, who is of good family, who is free from faults, and who has the modesty which fears the wounds (of sin).
      ", "Thirukkural"),
      __(" 503.
      Though deeply learned, unflecked by fault, 'tis rare to see,
      When closely scanned, a man from all unwisdom free.
      <br><b>Exp:</b> When even men, who have studied the most difficult works, and who are free from faults, are
      (carefully) examined, it is a rare thing to find them without ignorance.
      ", "Thirukkural"),
      __(" 504.
      Weigh well the good of each, his failings closely scan,
      As these or those prevail, so estimate the man.
      <br><b>Exp:</b> Let (a king) consider (a man's) good qualities, as well as his faults, and then judge (of his character) by that which prevails.
      ", "Thirukkural"),
      __(" 505.
      Of greatness and of meanness too,
      The deeds of each are touchstone true.
      <br><b>Exp:</b> A man's deeds are the touchstone of his greatness and littleness.
      ", "Thirukkural"),
      __(" 506.
      Beware of trusting men who have no kith of kin;
      No bonds restrain such men, no shame deters from sin.
      <br><b>Exp:</b> Let (a king) avoid choosing men who have no relations; such men have no attachment, and
      thereforehave no fear of crime.
      ", "Thirukkural"),
      __(" 507.
      By fond affection led who trusts in men of unwise soul,
      Yields all his being up to folly's blind control.
      <br><b>Exp:</b> To choose ignorant men, through partiality, is the height of folly.
      ", "Thirukkural"),
      __(" 508.
      Who trusts an untried stranger, brings disgrace,
      Remediless, on all his race.
      <br><b>Exp:</b> Sorrow that will not leave even his posterity will come upon him chooses a stranger whose character he has not known.
      ", "Thirukkural"),
      __(" 509.
      Trust no man whom you have not fully tried,
      When tested, in his prudence proved confide.
      <br><b>Exp:</b> Let (a king) choose no one without previous consideration; after he has made his choice, let him unhesitatingly select for each such duties as are appropriate.
      ", "Thirukkural"),
      __(" 510.
      Trust where you have not tried, doubt of a friend to feel,
      Once trusted, wounds inflict that nought can heal.
      <br><b>Exp:</b> To make choice of one who has not been examined, and to entertain doubts respecting one who has
      been chosen, will produce irremediable sorrow.
      ", "Thirukkural"),

      // 2.1.14. Selection and Employment

      __(" 511.
      Who good and evil scanning, ever makes the good his joy;
      Such man of virtuous mood should king employ.
      <br><b>Exp:</b> He should be employed (by a king), whose nature leads him to choose the good, after having weighed both the evil and the good in any undertaking.
      ", "Thirukkural"),
      __(" 512.
      Who swells the revenues, spreads plenty o'er the land,
      Seeks out what hinders progress, his the workman's hand.
      <br><b>Exp:</b> Let him do (the king's) work who can enlarge the sources (of revenue), increase wealth and
      considerately prevent the accidents (which would destroy it).
      ", "Thirukkural"),
      __(" 513.
      A loyal love with wisdom, clearness, mind from avarice free;
      Who hath these four good gifts should ever trusted be.
      <br><b>Exp:</b> Let the choice (of a king) fall upon him who largely possesses these four things, love, knowledge, a clear mind and freedom from covetousness.
      ", "Thirukkural"),
      __(" 514.
      Even when tests of every kind are multiplied,
      Full many a man proves otherwise, by action tried!
      <br><b>Exp:</b> Even when (a king) has tried them in every possible way, there are many men who change, from the nature of the works (in which they may be employed).
      ", "Thirukkural"),
      __(" 515.
      No specious fav'rite should the king's commission bear,
      But he that knows, and work performs with patient care.
      <br><b>Exp:</b> (A king's) work can only be accomplished by a man of wisdom and patient endurance; it is not of a nature to be given to one from mere personal attachment.
      ", "Thirukkural"),
      __(" 516.
      Let king first ask, 'Who shall the deed perform?' and 'What the deed?'
      Of hour befitting both assured, let every work proceed.
      <br><b>Exp:</b> Let (a king) act, after having considered the agent (whom he is to employ), the deed (he desires to do), and the time which is suitable to it.
      ", "Thirukkural"),
      __(" 517.
      'This man, this work shall thus work out,' let thoughtful king command;
      Then leave the matter wholly in his servant's hand.
      <br><b>Exp:</b> After having considered, \"this man can accomplish this, by these means\", let (the king) leave with him the discharge of that duty.
      ", "Thirukkural"),
      __(" 518.
      As each man's special aptitude is known,
      Bid each man make that special work his own.
      <br><b>Exp:</b> Having considered what work a man is fit for, let (the king) employ him in that work.
      ", "Thirukkural"),
      __(" 519.
      Fortune deserts the king who ill can bear,
      Informal friendly ways of men his tolls who share.
      <br><b>Exp:</b> Prosperity will leave (the king) who doubts the friendship of the man who steadily labours in the discharge of his duties.
      ", "Thirukkural"),
      __(" 520.
      Let king search out his servants' deeds each day;
      When these do right, the world goes rightly on its way.
      <br><b>Exp:</b> Let a king daily examine the conduct of his servants; if they do not act crookedly, the world will not act crookedly.
      ", "Thirukkural"),

      // 2.1.1 5. Cherishing one's Kindred

      __(" 521.
      When wealth is fled, old kindness still to show,
      Is kindly grace that only kinsmen know.
      <br><b>Exp:</b> Even when (a man's) property is all gone, relatives will act towards him with their accustomed
      (kindness).
      ", "Thirukkural"),
      __(" 522.
      The gift of kin's unfailing love bestows
      Much gain of good, like flower that fadeless blows.
      <br><b>Exp:</b> If (a man's) relatives remain attached to him with unchanging love, it will be a source of everincreasing wealth.
      ", "Thirukkural"),
      __(" 523.
      His joy of life who mingles not with kinsmen gathered round,
      Is lake where streams pour in, with no encircling bound.
      <br><b>Exp:</b> The wealth of one who does not mingle freely with his relatives, will be like the filling of water in a spacious tank that has no banks.
      ", "Thirukkural"),
      __(" 524.
      The profit gained by wealth's increase,
      Is living compassed round by relatives in peace.
      <br><b>Exp:</b> To live surrounded by relatives, is the advantage to be derived from the acquisition of wealth.
      ", "Thirukkural"),
      __(" 525.
      Who knows the use of pleasant words, and liberal gifts can give,
      Connections, heaps of them, surrounding him shall live.
      <br><b>Exp:</b> He will be surrounded by numerous relatives who manifests generosity and affability.
      ", "Thirukkural"),
      __(" 526.
      Than one who gifts bestows and wrath restrains,
      Through the wide world none larger following gains.
      <br><b>Exp:</b> No one, in all the world, will have so many relatives (about him), as he who makes large gift, and does not give way to anger.
      ", "Thirukkural"),
      __(" 527.
      The crows conceal not, call their friends to come, then eat;
      Increase of good such worthy ones shall meet.
      <br><b>Exp:</b> The crows do not conceal (their prey), but will call out for others (to share with them) while they eat it; wealth will be with those who show a similar disposition (towards their relatives).
      ", "Thirukkural"),
      __(" 528.
      Where king regards not all alike, but each in his degree,
      'Neath such discerning rule many dwell happily.
      <br><b>Exp:</b> Many relatives will live near a king, when they observe that he does not look on all alike, but that he looks on each man according to his merit.
      ", "Thirukkural"),
      __(" 529.
      Who once were his, and then forsook him, as before
      Will come around, when cause of disagreement is no more.
      <br><b>Exp:</b> Those who have been friends and have afterwards forsaken him, will return and join themselves (to him), when the cause of disagreement is not to be found in him.
      ", "Thirukkural"),
      __(" 530.
      Who causeless went away, then to return, for any cause, ask leave;
      The king should sift their motives well, consider, and receive!
      <br><b>Exp:</b> When one may have left him, and for some cause has returned to him, let the king fulfil the object (for which he has come back) and thoughtfully receive him again.
      ", "Thirukkural"),

      // 2.1.16. Unforgetfulness

      __(" 531.
      'Tis greater ill, it rapture of o'erweening gladness to the soul
      Bring self-forgetfulness than if transcendent wrath control.
      <br><b>Exp:</b> More evil than excessive anger, is forgetfulness which springs from the intoxication of great joy.
      ", "Thirukkural"),
      __(" 532.
      Perpetual, poverty is death to wisdom of the wise;
      When man forgets himself his glory dies!
      <br><b>Exp:</b> Forgetfulness will destroy fame, even as constant poverty destroys knowledge.
      ", "Thirukkural"),
      __(" 533.
      'To self-oblivious men no praise'; this rule
      Decisive wisdom sums of every school.
      <br><b>Exp:</b> Thoughtlessness will never acquire fame; and this tenet is upheld by all treatises in the world.
      ", "Thirukkural"),
      __(" 534.
      'To cowards is no fort's defence'; e'en so
      The self-oblivious men no blessing know.
      <br><b>Exp:</b> Just as the coward has no defence (by whatever fortifications ha may be surrounded), so the
      thoughtless has no good (whatever advantages he may possess).
      ", "Thirukkural"),
      __(" 535.
      To him who nought foresees, recks not of anything,
      The after woe shall sure repentance bring.
      <br><b>Exp:</b> The thoughtless man, who provides not against the calamities that may happen, will afterwards
      repent for his fault.
      ", "Thirukkural"),
      __(" 536.
      Towards all unswerving, ever watchfulness of soul retain,
      Where this is found there is no greater gain.
      <br><b>Exp:</b> There is nothing comparable with the possession of unfailing thoughtfulness at all times; and towards all persons.
      ", "Thirukkural"),
      __(" 537.
      Though things are arduous deemed, there's nought may not be won,
      When work with mind's unslumbering energy and thought is done.
      <br><b>Exp:</b> There is nothing too difficult to be accomplished, if a man set about it carefully, with unflinching endeavour.
      ", "Thirukkural"),
      __(" 538.
      Let things that merit praise thy watchful soul employ;
      Who these despise attain through sevenfold births no joy.
      <br><b>Exp:</b> Let (a man) observe and do these things which have been praised (by the wise); if he neglects and fails to perform them, for him there will be no (happiness) throughout the seven births.
      ", "Thirukkural"),
      __(" 539.
      Think on the men whom scornful mind hath brought to nought,
      When exultation overwhelms thy wildered thought.
      <br><b>Exp:</b> Let (a king) think of those who have been ruined by neglect, when his mind is elated with joy.
      ", "Thirukkural"),
      __(" 540.
      'Tis easy what thou hast in mind to gain,
      If what thou hast in mind thy mind retain.
      <br><b>Exp:</b> It is easy for (one) to obtain whatever he may think of, if he can again think of it.
      ", "Thirukkural"),

      // 2.1.17. The Right Sceptre

      __(" 541.
      Search out, to no one favour show; with heart that justice loves
      Consult, then act; this is the rule that right approves.
      <br><b>Exp:</b> To examine into (the crimes which may be committed), to show no favour (to any one), to desire to act with impartiality towards all, and to inflict (such punishments) as may be wisely resolved on,
      constitute rectitude.
      ", "Thirukkural"),
      __(" 542.
      All earth looks up to heav'n whence raindrops fall;
      All subjects look to king that ruleth all.
      <br><b>Exp:</b> When there is rain, the living creation thrives; and so when the king rules justly, his subjects thrive.
      ", "Thirukkural"),
      __(" 543.
      Learning and virtue of the sages spring,
      From all-controlling sceptre of the king.
      <br><b>Exp:</b> The sceptre of the king is the firm support of the Vedas of the Brahmin, and of all virtues therein described.
      ", "Thirukkural"),
      __(" 544.
      Whose heart embraces subjects all, lord over mighty land
      Who rules, the world his feet embracing stands.
      <br><b>Exp:</b> The world will constantly embrace the feet of the great king who rules over his subjects with love.
      ", "Thirukkural"),
      __(" 545.
      Where king, who righteous laws regards, the sceptre wields,
      There fall the showers, there rich abundance crowns the fields.
      <br><b>Exp:</b> Rain and plentiful crops will ever dwell together in the country of the king who sways his sceptre with justice.
      ", "Thirukkural"),
      __(" 546.
      Not lance gives kings the victory,
      But sceptre swayed with equity.
      <br><b>Exp:</b> It is not the javelin that gives victory, but the king's sceptre, if it do no injustice.
      ", "Thirukkural"),
      __(" 547.
      The king all the whole realm of earth protects;
      And justice guards the king who right respects.
      <br><b>Exp:</b> The king defends the whole world; and justice, when administered without defect, defends the king.
      ", "Thirukkural"),
      __(" 548.
      Hard of access, nought searching out, with partial hand
      The king who rules, shall sink and perish from the land.
      <br><b>Exp:</b> The king who gives not facile audience (to those who approach him), and who does not examine and pass judgment (on their complaints), will perish in disgrace.
      ", "Thirukkural"),
      __(" 549.
      Abroad to guard, at home to punish, brings
      No just reproach; 'tis work assigned to kings.
      <br><b>Exp:</b> In guarding his subjects (against injury from others), and in preserving them himself; to punish crime is not a fault in a king, but a duty.
      ", "Thirukkural"),
      __(" 550.
      By punishment of death the cruel to restrain,
      Is as when farmer frees from weeds the tender grain.
      <br><b>Exp:</b> For a king to punish criminals with death, is like pulling up the weeds in the green corn.
      ", "Thirukkural"),

      // 2.1.18. The Cruel Sceptre

      __(" 551.
      Than one who plies the murderer's trade, more cruel is the king
      Who all injustice works, his subjects harassing.
      <br><b>Exp:</b> The king who gives himself up to oppression and acts unjustly (towards his subjects) is more cruel than the man who leads the life of a murderer.
      ", "Thirukkural"),
      __(" 552.
      As 'Give' the robber cries with lance uplift,
      So kings with sceptred hand implore a gift.
      <br><b>Exp:</b> The request (for money) of him who holds the sceptre is like the word of a highway robber who
      stands with a weapon in hand and says \"give up your wealth\".
      ", "Thirukkural"),
      __(" 553.
      Who makes no daily search for wrongs, nor justly rules, that king
      Doth day by day his realm to ruin bring.
      <br><b>Exp:</b> The country of the king who does not daily examine into the wrongs done and distribute justice, will daily fall to ruin.
      ", "Thirukkural"),
      __(" 554.
      Whose rod from right deflects, who counsel doth refuse,
      At once his wealth and people utterly shall lose.
      <br><b>Exp:</b> The king, who, without reflecting (on its evil consequences), perverts justice, will lose at once both his wealth and his subjects.
      ", "Thirukkural"),
      __(" 555.
      His people's tears of sorrow past endurance, are not they
      Sharp instruments to wear the monarch's wealth away?
      <br><b>Exp:</b> Will not the tears, shed by a people who cannot endure the oppression which they suffer (from their king), become a saw to waste away his wealth ?
      ", "Thirukkural"),
      __(" 556.
      To rulers' rule stability is sceptre right;
      When this is not, quenched is the rulers' light.
      <br><b>Exp:</b> Righteous government gives permanence to (the fame of) kings; without that their fame will have no endurance.
      ", "Thirukkural"),
      __(" 557.
      As lack of rain to thirsty lands beneath,
      Is lack of grace in kings to all that breathe.
      <br><b>Exp:</b> As is the world without rain, so live a people whose king is without kindness.
      ", "Thirukkural"),
      __(" 558.
      To poverty it adds a sharper sting,
      To live beneath the sway of unjust king.
      <br><b>Exp:</b> Property gives more sorrow than poverty, to those who live under the sceptre of a king without
      justice.
      ", "Thirukkural"),
      __(" 559.
      Where king from right deflecting, makes unrighteous gain,
      The seasons change, the clouds pour down no rain.
      <br><b>Exp:</b> If the king acts contrary to justice, rain will become unseasonable, and the heavens will withhold their showers.
      ", "Thirukkural"),
      __(" 560.
      Where guardian guardeth not, udder of kine grows dry,
      And learnt-men' sacred lore will all forgotten lie.
      <br><b>Exp:</b> If the guardian (of the country) neglects to guard it, the produce of the cows will fail, and the men of six duties viz., the teachers will forget the books.
      ", "Thirukkural"),

      // 2.1.19. Absence of 'Terrorism

      __(" 561.
      Who punishes, investigation made in due degree,
      So as to stay advance of crime, a king is he.
      <br><b>Exp:</b> He is a king who having equitably examined (any injustice which has been brought to his notice), suitably punishes it, so that it may not be again committed.
      ", "Thirukkural"),
      __(" 562.
      For length of days with still increasing joys on Heav'n who call,
      Should raise the rod with brow severe, but let it gently fall.
      <br><b>Exp:</b> Let the king, who desires that his prosperity may long remain, commence his preliminary enquires with strictness, and then punish with mildness.
      ", "Thirukkural"),
      __(" 563.
      Where subjects dread of cruel wrongs endure,
      Ruin to unjust king is swift and sure.
      <br><b>Exp:</b> The cruel-sceptred king, who acts so as to put his subjects in fear, will certainly and quickly come to ruin.
      ", "Thirukkural"),
      __(" 564.
      'Ah! cruel is our king', where subjects sadly say,
      His age shall dwindle, swift his joy of life decay.
      <br><b>Exp:</b> The king who is spoken of as cruel will quickly perish; his life becoming shortened.
      ", "Thirukkural"),
      __(" 565.
      Whom subjects scarce may see, of harsh forbidding countenance;
      His ample wealth shall waste, blasted by demon's glance.
      <br><b>Exp:</b> The great wealth of him who is difficult of access and possesses a sternness of countenance, is like that which has been obtained by a devil.
      ", "Thirukkural"),
      __(" 566.
      The tyrant, harsh in speach and hard of eye,
      His ample joy, swift fading, soon shall die.
      <br><b>Exp:</b> The abundant wealth of the king whose words are harsh and whose looks are void of kindness, will instantly perish instead of abiding long, with him.
      ", "Thirukkural"),
      __(" 567.
      Harsh words and punishments severe beyond the right,
      Are file that wears away the monarch's conquering might.
      <br><b>Exp:</b> Severe words and excessive punishments will be a file to waste away a king's power for destroying (his enemies).
      ", "Thirukkural"),
      __(" 568.
      Who leaves the work to those around, and thinks of it no more;
      If he in wrathful mood reprove, his prosperous days are o'er!
      <br><b>Exp:</b> The prosperity of that king will waste away, who without reflecting (on his affairs himself), commits them to his ministers, and (when a failure occurs) gives way to anger, and rages against them.
      ", "Thirukkural"),
      __(" 569.
      Who builds no fort whence he may foe defy,
      In time of war shall fear and swiftly die.
      <br><b>Exp:</b> The king who has not provided himself with a place of defence, will in times of war be seized with fear and quickly perish.
      ", "Thirukkural"),

// 2.1.20. Benignity

      __(" 570.
      Tyrants with fools their counsels share:
      Earth can no heavier burthen bear!
      <br><b>Exp:</b> The earth bears up no greater burden than ignorant men whom a cruel sceptre attaches to itself (as the ministers of its evil deeds).
      ", "Thirukkural"),
      __(" 571.
      Since true benignity, that grace exceeding great, resides
      In kingly souls, world in happy state abides.
      <br><b>Exp:</b> The world exists through that greatest ornament (of princes), a gracious demeanour.
      ", "Thirukkural"),
      __(" 572.
      The world goes on its wonted way, since grace benign is there;
      All other men are burthen for the earth to bear.
      <br><b>Exp:</b> The prosperity of the world springs from the kindliness, the existence of those who have no
      (kindliness) is a burden to the earth.
      ", "Thirukkural"),
      __(" 573.
      Where not accordant with the song, what use of sounding chords?
      What gain of eye that no benignant light affords?
      <br><b>Exp:</b> Of what avail is a song if it be inconsistent with harmony ? what is the use of eyes which possess no kindliness.
      ", "Thirukkural"),
      __(" 574.
      The seeming eye of face gives no expressive light,
      When not with duly meted kindness bright.
      <br><b>Exp:</b> Beyond appearing to be in the face, what good do they do, those eyes in which is no well-regulated kindness ?
      ", "Thirukkural"),
      __(" 575.
      Benignity is eyes' adorning grace;
      Without it eyes are wounds disfiguring face.
      <br><b>Exp:</b> Kind looks are the ornaments of the eyes; without these they will be considered (by the wise) to be merely two sores.
      ", "Thirukkural"),
      __(" 576.
      Whose eyes 'neath brow infixed diffuse no ray
      Of grace; like tree in earth infixed are they.
      <br><b>Exp:</b> They resemble the trees of the earth, who although they have eyes, never look kindly (on others).
      ", "Thirukkural"),
      __(" 577.
      Eyeless are they whose eyes with no benignant lustre shine;
      Who've eyes can never lack the light of grace benign.
      <br><b>Exp:</b> Men without kind looks are men without eyes; those who (really) have eyes are also not devoid of kind looks.
      ", "Thirukkural"),
      __(" 578.
      Who can benignant smile, yet leave no work undone;
      By them as very own may all the earth be won.
      <br><b>Exp:</b> The world is theirs (kings) who are able to show kindness, without injury to their affairs,
      (administration of justice).
      ", "Thirukkural"),
      __(" 579.
      To smile on those that vex, with kindly face,
      Enduring long, is most excelling grace.
      <br><b>Exp:</b> Patiently to bear with, and show kindness to those who grieve us, is the most excellent of all
      dispositions.
      ", "Thirukkural"),
      __(" 580.
      They drink with smiling grace, though poison interfused they see,
      Who seek the praise of all-esteemed courtesy.
      <br><b>Exp:</b> Those who desire (to cultivate that degree of) urbanity which all shall love, even after swallowing the poison served to them by their friends, will be friendly with them.
      ", "Thirukkural"),

        // 2.1.21. Detectives

      __(" 581.
      These two: the code renowned and spies,
      In these let king confide as eyes.
      <br><b>Exp:</b> Let a king consider as his eyes these two things, a spy and a book (of laws) universally esteemed.
      ", "Thirukkural"),
      __(" 582.
      Each day, of every subject every deed,
      'Tis duty of the king to learn with speed.
      <br><b>Exp:</b> It is the duty of a king to know quickly (by a spy) what all happens, daily, amongst all men.
      ", "Thirukkural"),
      __(" 583.
      By spies who spies, not weighing things they bring,
      Nothing can victory give to that unwary king.
      <br><b>Exp:</b> There is no way for a king to obtain conquests, who knows not the advantage of discoveries made by a spy.
      ", "Thirukkural"),
      __(" 584.
      His officers, his friends, his enemies,
      All these who watch are trusty spies.
      <br><b>Exp:</b> He is a spy who watches all men, to wit, those who are in the king's employment, his relatives, and his enemies.
      ", "Thirukkural"),
      __(" 585.
      Of unsuspected mien and all-unfearing eyes,
      Who let no secret out, are trusty spies.
      <br><b>Exp:</b> A spy is one who is able to assume an appearance which may create no suspicion (in the minds of
      others), who fears no man's face, and who never reveals (his purpose).
      ", "Thirukkural"),
      __(" 586.
      As monk or devotee, through every hindrance making way,
      A spy, whate'er men do, must watchful mind display.
      <br><b>Exp:</b> He is a spy who, assuming the appearance of an ascetic, goes into (whatever place he wishes),
      examines into (all, that is needful), and never discovers himself, whatever may be done to him.
      ", "Thirukkural"),
      __(" 587.
      A spy must search each hidden matter out,
      And full report must render, free from doubt.
      <br><b>Exp:</b> A spy is one who is able to discover what is hidden and who retains no doubt concerning what he has known.
      ", "Thirukkural"),
      __(" 588.
      Spying by spies, the things they tell
      To test by other spies is well.
      <br><b>Exp:</b> Let not a king receive the information which a spy has discovered and made known to him, until he has examined it by another spy.
      ", "Thirukkural"),
      __(" 589.
      One spy must not another see: contrive it so;
      And things by three confirmed as truth you know.
      <br><b>Exp:</b> Let a king employ spies so that one may have no knowledge of the other; and when the information of three agrees together, let him receive it.
      ", "Thirukkural"),
      __(" 590.
      Reward not trusty spy in others' sight,
      Or all the mystery will come to light.
      <br><b>Exp:</b> Let not a king publicly confer on a spy any marks of his favour; if he does, he will divulge his own secret.
      ", "Thirukkural"),

      // 2.1.22. Energy

      __(" 591.
      'Tis energy gives men o'er that they own a true control;
      They nothing own who own not energy of soul.
      <br><b>Exp:</b> Energy makes out the man of property; as for those who are destitute of it, do they (really) possess what they possess ?
      ", "Thirukkural"),
      __(" 592.
      The wealth of mind man owns a real worth imparts,
      Material wealth man owns endures not, utterly departs.
      <br><b>Exp:</b> The possession of (energy of) mind is true property; the possession of wealth passes away and
      abides not.
      ", "Thirukkural"),
      __(" 593.
      'Lost is our wealth,' they utter not this cry distressed,
      The men of firm concentred energy of soul possessed.
      <br><b>Exp:</b> They who are possessed of enduring energy will not trouble themselves, saying, \"we have lost our property.\"", "Thirukkural"),
      __(" 594.
      The man of energy of soul inflexible,
      Good fortune seeks him out and comes a friend to dwell.
      <br><b>Exp:</b> Wealth will find its own way to the man of unfailing energy.
      ", "Thirukkural"),
      __(" 595.
      With rising flood the rising lotus flower its stem unwinds;
      The dignity of men is measured by their minds.
      <br><b>Exp:</b> The stalks of water-flowers are proportionate to the depth of water; so is men's greatness
      proportionate to their minds.
      ", "Thirukkural"),
      __(" 596.
      Whate'er you ponder, let your aim be loftly still,
      Fate cannot hinder always, thwart you as it will.
      <br><b>Exp:</b> In all that a king thinks of, let him think of his greatness; and if it should be thrust from him (by fate), it will have the nature of not being thrust from him.
      ", "Thirukkural"),
      __(" 597.
      The men of lofty mind quail not in ruin's fateful hour,
      The elephant retains his dignity mind arrows' deadly shower.
      <br><b>Exp:</b> The strong minded will not faint, even when all is lost; the elephant stands firm, even when wounded by a shower of arrows.
      ", "Thirukkural"),
      __(" 598.
      The soulless man can never gain
      Th' ennobling sense of power with men.
      <br><b>Exp:</b> Those who have no (greatness of) mind, will not acquire the joy of saying in the world, \"we have excercised liaberality\".
      ", "Thirukkural"),
      __(" 599.
      Huge bulk of elephant with pointed tusk all armed,
      When tiger threatens shrinks away alarmed!
      <br><b>Exp:</b> Although the elephant has a large body, and a sharp tusk, yet it fears the attack of the tiger.
      ", "Thirukkural"),
      __(" 600.
      Firmness of soul in man is real excellance;
      Others are trees, their human form a mere pretence.
      <br><b>Exp:</b> Energy is mental wealth; those men who are destitute of it are only trees in the form of men.
      ", "Thirukkural"),

      // 2.1.23. Unsluggishness

      __(" 601.
      Of household dignity the lustre beaming bright,
      Flickers and dies when sluggish foulness dims its light.
      <br><b>Exp:</b> By the darkness, of idleness, the indestructible lamp of family (rank) will be extinguished.
      ", "Thirukkural"),
      __(" 602.
      Let indolence, the death of effort, die,
      If you'd uphold your household's dignity.
      <br><b>Exp:</b> Let those, who desire that their family may be illustrious, put away all idleness from their conduct.
      ", "Thirukkural"),
      __(" 603.
      Who fosters indolence within his breast, the silly elf!
      The house from which he springs shall perish ere himself.
      <br><b>Exp:</b> The (lustre of the) family of the ignorant man, who acts under the influence of destructive laziness will perish, even before he is dead.
      ", "Thirukkural"),
      __(" 604.
      His family decays, and faults unheeded thrive,
      Who, sunk in sloth, for noble objects doth not strive.
      <br><b>Exp:</b> Family (greatness) will be destroyed, and faults will increase, in those men who give way to laziness, and put forth no dignified exertions.
      ", "Thirukkural"),
      __(" 605.
      Delay, oblivion, sloth, and sleep: these four
      Are pleasure-boat to bear the doomed to ruin's shore.
      <br><b>Exp:</b> Procrastination, forgetfulness, idleness, and sleep, these four things, form the vessel which is desired by those destined to destruction.
      ", "Thirukkural"),
      __(" 606.
      Though lords of earth unearned possessions gain,
      The slothful ones no yield of good obtain.
      <br><b>Exp:</b> It is a rare thing for the idle, even when possessed of the riches of kings who ruled over the whole earth, to derive any great benefit from it.
      ", "Thirukkural"),
      __(" 607.
      Who hug their sloth, nor noble works attempt,
      Shall bear reproofs and words of just contempt.
      Those who through idleness, and do not engage themselves in dignified exertion, will subject
      themselves to rebukes and reproaches.
      ", "Thirukkural"),
      __(" 608.
      If sloth a dwelling find mid noble family,
      Bondsmen to them that hate them shall they be.
      <br><b>Exp:</b> If idleness take up its abode in a king of high birth, it will make him a slave of his enemies.
      ", "Thirukkural"),
      __(" 609.
      Who changes slothful habits saves
      Himself from all that household rule depraves.
      <br><b>Exp:</b> When a man puts away idleness, the reproach which has come upon himself and his family will
      disappear.
      ", "Thirukkural"),
      __(" 610.
      The king whose life from sluggishness is rid,
      Shall rule o'er all by foot of mighty god bestrid.
      <br><b>Exp:</b> The king who never gives way to idleness will obtain entire possession of (the whole earth) passed over by him who measured (the worlds) with His foot.
      ", "Thirukkural"),

      // 2.1.24. Manly Effort

      __(" 611.
      Say not, 'Tis hard', in weak, desponding hour,
      For strenuous effort gives prevailing power.
      <br><b>Exp:</b> Yield not to the feebleness which says, \"this is too difficult to be done\"; labour will give the greatness (of mind) which is necessary (to do it).
      ", "Thirukkural"),
      __(" 612.
      In action be thou, 'ware of act's defeat;
      The world leaves those who work leave incomplete!
      <br><b>Exp:</b> Take care not to give up exertion in the midst of a work; the world will abandon those who abandon their unfinished work.
      ", "Thirukkural"),
      __(" 613.
      In strenuous effort doth reside
      The power of helping others: noble pride!
      <br><b>Exp:</b> The lustre of munificence will dwell only with the dignity of laboriousness or efforts.
      ", "Thirukkural"),
      __(" 614.
      Beneficent intent in men by whom no strenuous work is wrought,
      Like battle-axe in sexless being's hand availeth nought.
      <br><b>Exp:</b> The liberality of him, who does not labour, will fail, like the manliness of a hermaphrodite, who has a sword in its hand.
      ", "Thirukkural"),
      __(" 615.
      Whose heart delighteth not in pleasure, but in action finds delight,
      He wipes away his kinsmen's grief and stands the pillar of their might.
      <br><b>Exp:</b> He who desires not pleasure, but desires labour, will be a pillar to sustain his relations, wiping away their sorrows.
      ", "Thirukkural"),
      __(" 616.
      Effort brings fortune's sure increase,
      Its absence brings to nothingness.
      <br><b>Exp:</b> Labour will produce wealth; idleness will bring poverty.
      ", "Thirukkural"),
      __(" 617.
      In sluggishness is seen misfortune's lurid form, the wise declare;
      Where man unslothful toils, she of the lotus flower is there!
      <br><b>Exp:</b> They say that the goddess of adversity dwells with laziness, and the
      goddess of prosperity dwells with the labour of the industrious.
      ", "Thirukkural"),
      __(" 618.
      'Tis no reproach unpropitious fate should ban;
      But not to do man's work is foul disgrace to man!
      <br><b>Exp:</b> Adverse fate is no disgrace to any one; to be without exertion and without knowing what should be known, is disgrace.
      ", "Thirukkural"),
      __(" 619.
      Though fate-divine should make your labour vain;
      Effort its labour's sure reward will gain.
      <br><b>Exp:</b> Although it be said that, through fate, it cannot be attained, yet labour, with bodily exertion, will yield its reward.
      ", "Thirukkural"),
      __(" 620.
      Who strive with undismayed, unfaltering mind,
      At length shall leave opposing fate behind.
      <br><b>Exp:</b> They who labour on, without fear and without fainting will see even fate (put) behind their back.
      ", "Thirukkural"),

      // 2.1.25. Hopefulness in Trouble

      __(" 621.
      Smile, with patient, hopeful heart, in troublous hour;
      Meet and so vanquish grief; nothing hath equal power.
      <br><b>Exp:</b> If troubles come, laugh; there is nothing like that, to press upon and drive away sorrow.
      ", "Thirukkural"),
      __(" 622.
      Though sorrow, like a flood, comes rolling on,
      When wise men's mind regards it,- it is gone.
      <br><b>Exp:</b> A flood of troubles will be overcome by the (courageous) thought which the minds of the wise will entertain, even in sorrow.
      ", "Thirukkural"),
      __(" 623.
      Who griefs confront with meek, ungrieving heart,
      From them griefs, put to grief, depart.
      <br><b>Exp:</b> They give sorrow to sorrow, who in sorrow do not suffer sorrow.
      ", "Thirukkural"),
      __(" 624.
      Like bullock struggle on through each obstructed way;
      From such an one will troubles, troubled, roll away.
      <br><b>Exp:</b> Troubles will vanish (i.e., will be troubled) before the man who (struggles against difficulties) as a buffalo (drawing a cart) through deep mire.
      ", "Thirukkural"),
      __(" 625.
      When griefs press on, but fail to crush the patient heart,
      Then griefs defeated, put to grief, depart.
      <br><b>Exp:</b> The troubles of that man will be troubled (and disappear) who, however thickly they may come upon him, does not abandon (his purpose).
      ", "Thirukkural"),
      __(" 626.
      Who boasted not of wealth, nor gave it all their heart,
      Will not bemoan the loss, when prosperous days depart.
      <br><b>Exp:</b> Will those men ever cry out in sorrow, \"we are destitute\" who, (in their prosperity), give not way to (undue desire) to keep their wealth.
      ", "Thirukkural"),
      __(" 627.
      'Man's frame is sorrow's target', the noble mind reflects,
      Nor meets with troubled mind the sorrows it expects.
      <br><b>Exp:</b> The great will not regard trouble as trouble, knowing that the body is the butt of trouble.
      ", "Thirukkural"),
      __(" 628.
      He seeks not joy, to sorrow man is born, he knows;
      Such man will walk unharmed by touch of human woes.
      <br><b>Exp:</b> That man never experiences sorrow, who does not seek for pleasure, and who considers distress to be natural (to man).
      ", "Thirukkural"),
      __(" 629.
      Mid joys he yields not heart to joys' control.
      Mid sorrows, sorrow cannot touch his soul.
      <br><b>Exp:</b> He does not suffer sorrow, in sorrow who does not look for pleasure in pleasure.
      ", "Thirukkural"),
      __(" 630.
      Who pain as pleasure takes, he shall acquire
      The bliss to which his foes in vain aspire.
      <br><b>Exp:</b> The elevation, which even his enemies will esteem, will be gained by him, who regards pain as
      pleasure.
      ", "Thirukkural"),

      // 2.2 Ministers of State
      // 2.2.1. The Office of Minister of state

      __(" 631.
      A minister is he who grasps, with wisdom large,
      Means, time, work's mode, and functions rare he must discharge.
      <br><b>Exp:</b> The minister is one who can make an excellent choice of means, time, manner of execution, and the difficult undertaking (itself).
      ", "Thirukkural"),
      __(" 632.
      A minister must greatness own of guardian power, determined mind,
      Learn'd wisdom, manly effort with the former five combined.
      <br><b>Exp:</b> The minister is one who in addition to the aforesaid five things excels in the possession of firmness, protection of subjects, clearness by learning, and perseverance.
      ", "Thirukkural"),
      __(" 633.
      A minister is he whose power can foes divide,
      Attach more firmly friends, of severed ones can heal the breaches wide.
      <br><b>Exp:</b> The minister is one who can effect discord (among foes), maintain the good-will of his friends and restore to friendship those who have seceded (from him).
      ", "Thirukkural"),
      __(" 634.
      A minister has power to see the methods help afford,
      To ponder long, then utter calm conclusive word.
      <br><b>Exp:</b> The minister is one who is able to comprehend (the whole nature of an undertaking), execute it in the best manner possible, and offer assuring advice (in time of necessity).
      ", "Thirukkural"),
      __(" 635.
      The man who virtue knows, has use of wise and pleasant words.
      With plans for every season apt, in counsel aid affords.
      <br><b>Exp:</b> He is the best helper (of the king) who understanding the duties, of the latter, is by his special learning, able to tender the fullest advice, and at all times conversant with the best method (of performing actions).
      ", "Thirukkural"),
      __(" 636.
      When native subtilty combines with sound scholastic lore,
      'Tis subtilty surpassing all, which nothing stands before.
      <br><b>Exp:</b> What (contrivances) are there so acute as to resist those who possess natural acuteness in addition to learning ?.
      ", "Thirukkural"),
      __(" 637.
      Though knowing all that books can teach, 'tis truest tact
      To follow common sense of men in act.
      <br><b>Exp:</b> Though you are acquainted with the (theoretical) methods (of performing an act), understand the
      ways of the world and act accordingly.
      ", "Thirukkural"),
      __(" 638.
      'Tis duty of the man in place aloud to say
      The very truth, though unwise king may cast his words away.
      <br><b>Exp:</b> Although the king be utterly ignorant, it is the duty of the minister to give (him) sound advice.", "Thirukkural"),
      __(" 639.
      A minister who by king's side plots evil things
      Worse woes than countless foemen brings.
      <br><b>Exp:</b> Far better are seventy crores of enemies (for a king) than a minister at his side who intends (his) ruin.
      ", "Thirukkural"),
      __(" 640.
      For gain of end desired just counsel nought avails
      To minister, when tact in execution fails.
      <br><b>Exp:</b> Those ministers who are destitute of (executive) ability will fail to carry out their projects, although they may have contrived aright.
      ", "Thirukkural"),

      // 2.2.2. Power in Speech

      __(" 641.
      A tongue that rightly speaks the right is greatest gain,
      It stands alone midst goodly things that men obtain.
      <br><b>Exp:</b> The possession of that goodness which is called the goodness of speech is (even to others) better than any other goodness.
      ", "Thirukkural"),
      __(" 642.
      Since gain and loss in life on speech depend,
      From careless slip in speech thyself defend.
      <br><b>Exp:</b> Since (both) wealth and evil result from (their) speech, ministers should most carefully guard
      themselves against faultiness therein.
      ", "Thirukkural"),
      __(" 643.
      'Tis speech that spell-bound holds the listening ear,
      While those who have not heard desire to hear.
      <br><b>Exp:</b> The (minister's) speech is that which seeks (to express) elements as bind his friends (to himself) and is so delivered as to make even his enemies desire (his friendship).
      ", "Thirukkural"),
      __(" 644.
      Speak words adapted well to various hearers' state;
      No higher virtue lives, no gain more surely great.
      <br><b>Exp:</b> Understand the qualities (of your hearers) and (then) make your speech; for superior to it, there is neither virtue nor wealth.
      ", "Thirukkural"),
      __(" 645.
      Speak out your speech, when once 'tis past dispute
      That none can utter speech that shall your speech refute.
      <br><b>Exp:</b> Deliver your speech, after assuring yourself that no counter speech can defeat your own.
      ", "Thirukkural"),
      __(" 646.
      Charming each hearer's ear, of others' words to seize the sense,
      Is method wise of men of spotless excellence.
      <br><b>Exp:</b> It is the opinion of those who are free from defects in diplomacy that the minister should speak so as to make his hearers desire (to hear more) and grasp the meaning of what he hears himself.
      ", "Thirukkural"),
      __(" 647.
      Mighty in word, of unforgetful mind, of fearless speech,
      'Tis hard for hostile power such man to overreach.
      <br><b>Exp:</b> It is impossible for any one to conquer him by intrique who possesses power of speech, and is neither faulty nor timid.
      ", "Thirukkural"),
      __(" 648.
      Swiftly the listening world will gather round,
      When men of mighty speech the weighty theme propound.
      <br><b>Exp:</b> If there be those who can speak on various subjects in their proper order and in a pleasing manner, the world would readily accept them.
      ", "Thirukkural"),
      __(" 649.
      Who have not skill ten faultless words to utter plain,
      Their tongues will itch with thousand words man's ears to pain.
      <br><b>Exp:</b> They will desire to utter many words, who do not know how to speak a few faultless ones.
      ", "Thirukkural"),
      __(" 650.
      Like scentless flower in blooming garland bound
      Are men who can't their lore acquired to other's ears expound.
      <br><b>Exp:</b> Those who are unable to set forth their acquirements (before others) are like flowers blossoming in a cluster and yet without fragrance.
      ", "Thirukkural"),

      // 2.2.3. Purity in Action

      __(" 651.
      The good external help confers is worldly gain;
      By action good men every needed gift obtain.
      <br><b>Exp:</b> The efficacy of support will yield (only) wealth; (but) the efficacy of action will yield all that is desired.", "Thirukkural"),
      __(" 652.
      From action evermore thyself restrain
      Of glory and of good that yields no gain.
      <br><b>Exp:</b> Ministers should at all times avoid acts which, in addition to fame, yield no benefit (for the future).", "Thirukkural"),
      __(" 653.
      Who tell themselves that nobler things shall yet be won
      All deeds that dim the light of glory must they shun.
      <br><b>Exp:</b> Those who say, \"we will become (better)\" should avoid the performance of acts that would destroy (their fame).", "Thirukkural"),
      __(" 654.
      Though troubles press, no shameful deed they do,
      Whose eyes the ever-during vision view.
      <br><b>Exp:</b> Those who have infallible judgement though threatened with peril will not do acts which have
      brought disgrace (on former ministers).
      ", "Thirukkural"),
      __(" 655.
      Do nought that soul repenting must deplore,
      If thou hast sinned, 'tis well if thou dost sin no more.
      <br><b>Exp:</b> Let a minister never do acts of which he would have to grieve saying, \"what is this I have done\"; (but) should he do (them), it were good that he grieved not.
      ", "Thirukkural"),
      __(" 656.
      Though her that bore thee hung'ring thou behold, no deed
      Do thou, that men of perfect soul have crime decreed.
      <br><b>Exp:</b> Though a minister may see his mother starve; let him do not act which the wise would (treat with contempt).", "Thirukkural"),
      __(" 657.
      Than store of wealth guilt-laden souls obtain,
      The sorest poverty of perfect soul is richer gain.
      <br><b>Exp:</b> Far more excellent is the extreme poverty of the wise than wealth obtained by heaping up of sinful deeds.
      ", "Thirukkural"),
      __(" 658.
      To those who hate reproof and do forbidden thing.
      What prospers now, in after days shall anguish bring.
      <br><b>Exp:</b> The actions of those, who have not desisted from doing deeds forbidden (by the great), will, even if they succeed, cause them sorrow.
      ", "Thirukkural"),
      __(" 659.
      What's gained through tears with tears shall go;
      From loss good deeds entail harvests of blessings grow.
      <br><b>Exp:</b> All that has been obtained with tears (to the victim) will depart with tears (to himself); but what has been by fair means; though with loss at first, will afterwards yield fruit.
      ", "Thirukkural"),
      __(" 660.
      In pot of clay unburnt he water pours and would retain,
      Who seeks by wrong the realm in wealth and safety to maintain.
      <br><b>Exp:</b> (For a minister) to protect (his king) with wealth obtained by foul means is like preserving a vessel of wet clay by filling it with water.
      ", "Thirukkural"),

      // 2.2.4. Power in Action
      __(" 661.
      What men call 'power in action' know for 'power of mind'
      Externe to man all other aids you find.
      <br><b>Exp:</b> Firmness in action is (simply) one's firmness of mind; all other (abilities) are not of this nature.", "Thirukkural"),
      __(" 662.
      'Each hindrance shun', 'unyielding onward press, If obstacle be there,'
      These two define your way, so those that search out truth declare.
      <br><b>Exp:</b> Not to perform a ruinous act, and not to be discouraged by the ruinous termination of an act, are the two maxims which, the wise say, from the principles of those who have investigated the subject.
      ", "Thirukkural"),
      __(" 663.
      Man's fitting work is known but by success achieved;
      In midst the plan revealed brings ruin ne'er to be retrieved.
      <br><b>Exp:</b> So to perform an act as to publish it (only) at its termination is (true) manliness; for to announce it beforehand, will cause irremediable sorrow.
      ", "Thirukkural"),
      __(" 664.
      Easy to every man the speech that shows the way;
      Hard thing to shape one's life by words they say!
      <br><b>Exp:</b> To say (how an act is to be performed) is (indeed) easy for any one; but far difficult it is to do according to what has been said.
      ", "Thirukkural"),
      __(" 665.
      The power in act of men renowned and great,
      With king acceptance finds and fame through all the state.
      <br><b>Exp:</b> The firmness in action of those who have become great by the excellence (of their counsel) will, by attaining its fulfilment in the person of the king, be esteemed (by all).
      ", "Thirukkural"),
      __(" 666.
      Whate'er men think, ev'n as they think, may men obtain,
      If those who think can steadfastness of will retain.
      <br><b>Exp:</b> If those who have planned (an undertaking) possess firmness (in executing it) they will obtain what they have desired even as they have desired it.
      ", "Thirukkural"),
      __(" 667.
      Despise not men of modest bearing; Look not at form, but what men are:
      For some there live, high functions sharing, Like linch-pin of the mighty car!
      <br><b>Exp:</b> Let none be despised for (their) size; (for) the world has those who resemble the linch-pin of the big rolling car.
      ", "Thirukkural"),
      __(" 668.
      What clearly eye discerns as right, with steadfast will,
      And mind unslumbering, that should man fulfil.
      <br><b>Exp:</b> An act that has been firmly resolved on must be as firmly carried out without delay.
      ", "Thirukkural"),
      __(" 669.
      Though toil and trouble face thee, firm resolve hold fast,
      And do the deeds that pleasure yield at last.
      <br><b>Exp:</b> Though it should cause increasing sorrow (at the outset), do with firmness the act that yield bliss (in the end).
      ", "Thirukkural"),
      __(" 670.
      The world desires not men of every power possessed,
      Who power in act desire not,- crown of all the rest.
      <br><b>Exp:</b> The great will not esteem those who esteem not firmness of action, whatever other abilities the latter may possess.
      ", "Thirukkural"),

      // 2.2.5. The Envoy

      __(" 681.
      Benevolence high birth, the courtesy kings love:-
      These qualities the envoy of a king approve.
      <br><b>Exp:</b> The qualification of an ambassador are affection (for his relations) a fitting birth, and the possession of attributes pleasing to royalty.
      ", "Thirukkural"),
      __(" 682.
      Love, knowledge, power of chosen words, three things,
      Should he possess who speaks the words of kings.
      <br><b>Exp:</b> Love (to his sovereign), knowledge (of his affairs), and a discriminating power of speech (before other sovereigns) are the three sine qua non qualifications of an ambassador.
      ", "Thirukkural"),
      __(" 683.
      Mighty in lore amongst the learned must he be,
      Midst jav'lin-bearing kings who speaks the words of victory.
      <br><b>Exp:</b> To be powerful in politics among those who are learned (in ethics) is the character of him who speaks to lance-bearing kings on matters of triumph (to his own sovereign).
      ", "Thirukkural"),
      __(" 684.
      Sense, goodly grace, and knowledge exquisite.
      Who hath these three for envoy's task is fit.
      <br><b>Exp:</b> He may go on a mission (to foreign rulers) who has combined in him all these three. viz., (natural) sense, an attractive bearing and well-tried learning.
      ", "Thirukkural"),
      __(" 685.
      In terms concise, avoiding wrathful speech, who utters pleasant word,
      An envoy he who gains advantage for his lord.
      <br><b>Exp:</b> He is an ambassador who (in the presence of foreign rulers) speaks briefly, avoids harshness, talks so as to make them smile, and thus brings good (to his own sovereign).
      ", "Thirukkural"),
      __(" 686.
      An envoy meet is he, well-learned, of fearless eye
      Who speaks right home, prepared for each emergency.
      <br><b>Exp:</b> He is an ambassador who having studied (politics) talks impressively, is not afraid of angry looks, and knows (to employ) the art suited to the time.
      ", "Thirukkural"),
      __(" 687.
      He is the best who knows what's due, the time considered well,
      The place selects, then ponders long ere he his errand tell.
      <br><b>Exp:</b> He is chief (among ambassadors) who understands the proper decorum (before foreign princes),
      seeks the (proper) occasion, knows the (most suitable) place, and delivers his message after (due)
      consideration.
      ", "Thirukkural"),
      __(" 688.
      Integrity, resources, soul determined, truthfulness.
      Who rightly speaks his message must these marks possess.
      <br><b>Exp:</b> The qualifications of him who faithfully delivers his (sovereign's) message are purity, the support (of foreign ministers), and boldness, with truthfulness in addition to the (aforesaid) three.
      ", "Thirukkural"),
      __(" 689.
      His faltering lips must utter no unworthy thing,
      Who stands, with steady eye, to speak the mandates of his king.
      <br><b>Exp:</b> He alone is fit to communicate (his sovereign's) reply, who possesses the firmness not to utter even inadvertently what may reflect discredit (on the latter).
      ", "Thirukkural"),
      __(" 690.
      Death to the faithful one his embassy may bring;
      To envoy gains assured advantage for his king.
      <br><b>Exp:</b> He is the ambassador who fearlessly seeks his sovereign's good though it should cost him his life (to deliver his message).
      ", "Thirukkural"),

      // 2.2.6. Conduct in the Presence of the King

      __(" 691.
      Who warm them at the fire draw not too near, nor keep too much aloof;
      Thus let them act who dwell beneath of warlike kings the palace-roof.
      <br><b>Exp:</b> Ministers who serve under fickle-minded monarchs should, like those who warm themselves at the
      fire, be neither (too) far, nor (too) near.
      ", "Thirukkural"),
      __(" 692.
      To those who prize not state that kings are wont to prize,
      The king himself abundant wealth supplies.
      <br><b>Exp:</b> For ministers not to cover the things desired by their kings will through the kings themselves yield them everlasting wealth.
      ", "Thirukkural"),
      __(" 693.
      Who would walk warily, let him of greater faults beware;
      To clear suspicions once aroused is an achievement rare.
      <br><b>Exp:</b> Ministers who would save themselves should avoid (the commission of) serious errors for if the
      king's suspicion is once roused, no one can remove it.
      ", "Thirukkural"),
      __(" 694.
      All whispered words and interchange of smiles repress,
      In presence of the men who kingly power possess.
      <br><b>Exp:</b> While in the presence of the sovereign, ministers should neither whisper to nor smile at others.
      ", "Thirukkural"),
      __(" 695.
      Seek not, ask not, the secret of the king to hear;
      But if he lets the matter forth, give ear!
      <br><b>Exp:</b> (When the king is engaged) in secret counsel (with others), ministers should neither over-hear
      anything whatever nor pry into it with inquisitive questions, but (wait to) listen when it is divulged (by the king himself).
      ", "Thirukkural"),
      __(" 696.
      Knowing the signs, waiting for fitting time, with courteous care,
      Things not displeasing, needful things, declare.
      <br><b>Exp:</b> Knowing the (king's disposition and seeking the right time, (the minister) should in a pleasing manner suggest things such as are desirable and not disagreeable.
      ", "Thirukkural"),
      __(" 697.
      Speak pleasant things, but never utter idle word;
      Not though by monarch's ears with pleasure heard.
      <br><b>Exp:</b> Ministers should (always) give agreeable advice but on no occasion recommend useless actions,
      though requested (to do so).
      ", "Thirukkural"),
      __(" 698.
      Say not, 'He's young, my kinsman,' despising thus your king;
      But reverence the glory kingly state doth bring.
      <br><b>Exp:</b> Ministers should behave in accordance with the (Divine) light in the person of kings and not despise them saying, \"He is our junior (in age) and connected with our family!\".
      ", "Thirukkural"),
      __(" 699.
      'We've gained his grace, boots nought what graceless acts we do',
      So deem not sages who the changeless vision view.
      <br><b>Exp:</b> Those whose judgement is firm will not do what is disagreeable (to the sovereign) saying (within themselves) \"We are esteemed by the king\".
      ", "Thirukkural"),
      __(" 700.
      Who think 'We're ancient friends' and do unseemly things;
      To these familiarity sure ruin brings.
      <br><b>Exp:</b> The (foolish) claim with which a minister does unbecoming acts because of his (long) familiarity (with the king) will ensure his ruin.
      ", "Thirukkural"),

      // 2.2.7. The Knowledge of Indications

      __(" 701.
      Who knows the sign, and reads unuttered thought, the gem is he,
      Of earth round traversed by the changeless sea.
      <br><b>Exp:</b> The minister who by looking (at the king) understands his mind without being told (of it), will be a perpetual ornament to the world which is surrounded by a never-drying sea.
      ", "Thirukkural"),
      __(" 702.
      Undoubting, who the minds of men can scan,
      As deity regard that gifted man.
      <br><b>Exp:</b> He is to be esteemed a god who is able to ascertain without a doubt what is within (one's mind).", "Thirukkural"),
      __(" 703.
      Who by the sign the signs interprets plain,
      Give any member up his aid to gain.
      <br><b>Exp:</b> The king should ever give whatever (is asked) of his belongings and secure him who, by the
      indications (of his own mind) is able to read those of another.
      ", "Thirukkural"),
      __(" 704.
      Who reads what's shown by signs, though words unspoken be,
      In form may seem as other men, in function nobler far is he.
      <br><b>Exp:</b> Those who understand one's thoughts without being informed (thereof) and those who do not, may
      (indeed) resemble one another bodily; still are they different (mentally).
      ", "Thirukkural"),
      __(" 705.
      By sign who knows not sings to comprehend, what gain,
      'Mid all his members, from his eyes does he obtain?
      <br><b>Exp:</b> Of what use are the eyes amongst one's members, if they cannot by their own indications dive those of another ?.
      ", "Thirukkural"),
      __(" 706.
      As forms around in crystal mirrored clear we find,
      The face will show what's throbbing in the mind.
      <br><b>Exp:</b> As the mirror reflects what is near so does the face show what is uppermost in the mind.
      ", "Thirukkural"),
      __(" 707.
      Than speaking countenance hath aught more prescient skill?
      Rejoice or burn with rage, 'tis the first herald still!
      <br><b>Exp:</b> Is there anything so full of knowledge as the face ? (No.) it precedes the mind, whether (the latter is) pleased or vexed.
      ", "Thirukkural"),
      __(" 708.
      To see the face is quite enough, in presence brought,
      When men can look within and know the lurking thought.
      <br><b>Exp:</b> If the king gets those who by looking into his mind can understand (and remove) what has occurred (to him) it is enough that he stand looking at their face.
      ", "Thirukkural"),
      __(" 709.
      The eye speaks out the hate or friendly soul of man;
      To those who know the eye's swift varying moods to scan.
      <br><b>Exp:</b> If a king gets ministers who can read the movements of the eye, the eyes (of foreign kings) will (themselves) reveal (to him) their hatred or friendship.
      ", "Thirukkural"),
      __(" 710.
      The men of keen discerning soul no other test apply
      (When you their secret ask) than man's revealing eye.
      <br><b>Exp:</b> The measuring-rod of those (ministers) who say \"we are acute\" will on inquiry be found to be their (own) eyes and nothing else.
      ", "Thirukkural"),

      // 2.2.8. The Knowledge of the Council Chamber

      __(" 711.
      Men pure in heart, who know of words the varied force,
      Should to their audience known adapt their well-arranged discourse.
      <br><b>Exp:</b> Let the pure who know the arrangement of words speak with deliberation after ascertaining (the
      nature of) the court (then assembled).
      ", "Thirukkural"),
      __(" 712.
      Good men to whom the arts of eloquence are known,
      Should seek occasion meet, and say what well they've made their own.
      <br><b>Exp:</b> Let the good who know the uses of words speak with a clear knowledge after ascertaining the time (suited to the court).
      ", "Thirukkural"),
      __(" 713.
      Unversed in councils, who essays to speak.
      Knows not the way of suasive words,- and all is weak.
      <br><b>Exp:</b> Those who undertake to speak without knowing the (nature of the) court are ignorant of the quality of words as well as devoid of the power (of learning).
      ", "Thirukkural"),
      __(" 714.
      Before the bright ones shine as doth the light!
      Before the dull ones be as purest stucco white!
      <br><b>Exp:</b> Ministers should be lights in the assembly of the enlightned, but assume the pure whiteness of mortar (ignorance) in that of fools.
      ", "Thirukkural"),
      __(" 715.
      Midst all good things the best is modest grace,
      That speaks not first before the elders' face.
      <br><b>Exp:</b> The modesty by which one does not rush forward and speak in (an assembly of) superiors is the best among all (one's) good qualities.
      ", "Thirukkural"),
      __(" 716.
      As in the way one tottering falls, is slip before
      The men whose minds are filled with varied lore.
      <br><b>Exp:</b> (For a minister) to blunder in the presence of those who have acquired a vast store of learning and know (the value thereof) is like a good man stumbling (and falling away) from the path (of virtue).
      ", "Thirukkural"),
      __(" 717.
      The learning of the learned sage shines bright
      To those whose faultless skill can value it aright.
      <br><b>Exp:</b> The learning of those who have read and understood (much) will shine in the assembly of those who faultlessly examine (the nature of) words.
      ", "Thirukkural"),
      __(" 718.
      To speak where understanding hearers you obtain,
      Is sprinkling water on the fields of growing grain!
      <br><b>Exp:</b> Lecturing to those who have the ability to understand (for themselves) is like watering a bed of plants that are growing (of themselves).
      ", "Thirukkural"),
      __(" 719.
      In councils of the good, who speak good things with penetrating power,
      In councils of the mean, let them say nought, e'en in oblivious hour.
      <br><b>Exp:</b> Those who are able to speak good things impressively in an assembly of the good should not even
      forgetfully speak them in that of the low
      ", "Thirukkural"),
      __(" 720.
      Ambrosia in the sewer spilt, is word
      Spoken in presence of the alien herd.
      <br><b>Exp:</b> To utter (a good word) in the assembly of those who are of inferior rank is like dropping nectar on the ground.
      ", "Thirukkural"),

        // 2.2.9. Not to dread the Council

      __(" 721.
      Men, pure in heart, who know of words the varied force,
      The mighty council's moods discern, nor fail in their discourse.
      <br><b>Exp:</b> The pure who know the classification of words having first ascertained the nature (of the court) will not (through fear) falter in their speech before the powerful body.
      ", "Thirukkural"),
      __(" 722.
      Who what they've learned, in penetrating words heve learned to say,
      Before the learn'd among the learn'd most learn'd are they.
      <br><b>Exp:</b> Those who can agreeably set forth their acquirements before the learned will be regarded as the
      most learned among the learned.
      ", "Thirukkural"),
      __(" 723.
      Many encountering death in face of foe will hold their ground;
      Who speak undaunted in the council hall are rarely found.
      <br><b>Exp:</b> Many indeed may (fearlessly) die in the presence of (their) foes; (but) few are those who are fearless in the assembly (of the learned).
      ", "Thirukkural"),
      __(" 724.
      What you have learned, in penetrating words speak out before
      The learn'd; but learn what men more learn'd can teach you more.
      <br><b>Exp:</b> (Ministers) should agreeably set forth their acquirements before the learned and acquire more
      (knowledge) from their superiors (in learning).
      ", "Thirukkural"),
      __(" 725.
      By rule, to dialectic art your mind apply,
      That in the council fearless you may make an apt reply.
      <br><b>Exp:</b> In order to reply fearlessly before a foreign court, (ministers) should learn logic according to the rules (of grammar).
      ", "Thirukkural"),
      __(" 726.
      To those who lack the hero's eye what can the sword avail?
      Or science what, to those before the council keen who quail?
      <br><b>Exp:</b> What have they to do with a sword who are not valiant, or they with learning who are afraid of an intelligent assembly ?
      ", "Thirukkural"),
      __(" 727.
      As shining sword before the foe which 'sexless being' bears,
      Is science learned by him the council's face who fears.
      <br><b>Exp:</b> The learning of him who is diffident before an assembly is like the shining sword of an hermaphrodite in the presence of his foes.
      ", "Thirukkural"),
      __(" 728.
      Though many things they've learned, yet useless are they all,
      To man who cannot well and strongly speak in council hall.
      <br><b>Exp:</b> Those who cannot agreeably speak good things before a good assembly are indeed unprofitable
      persons inspite of all their various acquirements.
      ", "Thirukkural"),
      __(" 729.
      Who, though they've learned, before the council of the good men quake,
      Than men unlearn'd a lower place must take.
      <br><b>Exp:</b> They who, though they have learned and understood, are yet afraid of the assembly of the good, are said to be inferior (even) to the illiterate.
      ", "Thirukkural"),
      __(" 730.
      Who what they've learned, in penetrating words know not to say,
      The council fearing, though they live, as dead are they.
      <br><b>Exp:</b> Those who through fear of the assembly are unable to set forth their learning in an interesting
      manner, though alive, are yet like the dead.
      ", "Thirukkural"),

      // 2.3 The Essentials of a State
      // 2.3.1 The Land

      __(" 731.
      Where spreads fertility unfailing, where resides a band,
      Of virtuous men, and those of ample wealth, call that a 'land'
      <br><b>Exp:</b> A kingdom is that in which (those who carry on) a complete cultivation, virtuous persons, and
      merchants with inexhaustible wealth, dwell together.
      ", "Thirukkural"),
      __(" 732.
      That is a 'land' which men desire for wealth's abundant share,
      Yielding rich increase, where calamities are rare.
      <br><b>Exp:</b> A kingdom is that which is desire for its immense wealth, and which grows greatly in prosperity, being free from destructive causes.
      ", "Thirukkural"),
      __(" 733.
      When burthens press, it bears; Yet, With unfailing hand
      To king due tribute pays: that is the 'land'
      <br><b>Exp:</b> A kingdom is that which can bear any burden that may be pressed on it (from adjoining kingdoms)
      and (yet) pay the full tribute to its sovereign.
      ", "Thirukkural"),
      __(" 734.
      That is a 'land' whose peaceful annals know,
      Nor famine fierce, nor wasting plague, nor ravage of the foe.
      <br><b>Exp:</b> A kingdom is that which continues to be free from excessive starvation, irremediable epidemics, and destructive foes.
      ", "Thirukkural"),
      __(" 735.
      From factions free, and desolating civil strife, and band
      Of lurking murderers that king afflict, that is the 'land'.
      <br><b>Exp:</b> A kingdom is that which is without various (irregular) associations, destructive internal enemies, and murderous savages who (sometimes) harass the sovereign.
      ", "Thirukkural"),
      __(" 736.
      Chief of all lands is that, where nought disturbs its peace;
      Or, if invaders come, still yields its rich increase.
      <br><b>Exp:</b> The learned say that the best kingdom is that which knows no evil (from its foes), and, if injured (at all), suffers no diminution in its fruitfulness.
      ", "Thirukkural"),
      __(" 737.
      Waters from rains and springs, a mountain near, and waters thence;
      These make a land, with fortress' sure defence.
      <br><b>Exp:</b> The constituents of a kingdom are the two waters (from above and below), well situated hills and an undestructible fort.
      ", "Thirukkural"),
      __(" 738.
      A country's jewels are these five: unfailing health,
      Fertility, and joy, a sure defence, and wealth.
      <br><b>Exp:</b> Freedom from epidemics, wealth, produce, happiness and protection (to subjects); these five, the learned, say, are the ornaments of a kingdom.
      ", "Thirukkural"),
      __(" 739.
      That is a land that yields increase unsought,
      That is no land whose gifts with toil are bought.
      <br><b>Exp:</b> The learned say that those are kingdom whose wealth is not laboured for, and those not, whose
      wealth is only obtained through labour.
      ", "Thirukkural"),
      __(" 740.
      Though blest with all these varied gifts' increase,
      A land gains nought that is not with its king at peace.
      <br><b>Exp:</b> Although in possession of all the above mentioned excellences, these are indeed of no use to a
      country, in the absence of harmony between the sovereign and the sujects.
      ", "Thirukkural"),

      // 2.3.2. The Fortification

      __(" 741.
      A fort is wealth to those who act against their foes;
      Is wealth to them who, fearing, guard themselves from woes.
      <br><b>Exp:</b> A fort is an object of importance to those who march (against their foes) as well as to those who through fear (of pursuers) would seek it for shelter.
      ", "Thirukkural"),
      __(" 742.
      A fort is that which owns fount of waters crystal clear,
      An open space, a hill, and shade of beauteous forest near.
      <br><b>Exp:</b> A fort is that which has everlasting water, plains, mountains and cool shady forests.
      ", "Thirukkural"),
      __(" 743.
      Height, breadth, strength, difficult access:
      Science declares a fort must these possess.
      <br><b>Exp:</b> The learned say that a fortress is an enclosure having these four (qualities) viz., height, breadth, strength and inaccessibility.
      ", "Thirukkural"),
      __(" 744.
      A fort must need but slight defence, yet ample be,
      Defying all the foeman's energy.
      <br><b>Exp:</b> A fort is that which has an extensive space within, but only small places to be guarded, and such as can destroy the courage of besieging foes.
      ", "Thirukkural"),
      __(" 745.
      Impregnable, containing ample stores of food,
      A fort for those within, must be a warlike station good.
      <br><b>Exp:</b> A fort is that which cannot be captured, which abounds in suitable provisions, and affords a position of easy defence to its inmates.
      ", "Thirukkural"),
      __(" 746.
      A fort, with all munitions amply stored,
      In time of need should good reserves afford.
      <br><b>Exp:</b> A fort is that which has all (needful) things, and excellent heroes that can help it against destruction (by foes).
      ", "Thirukkural"),
      __(" 747.
      A fort should be impregnable to foes who gird it round,
      Or aim there darts from far, or mine beneath the ground.
      <br><b>Exp:</b> A fort is that which cannot be captured by blockading, assaulting, or undermining it.
      ", "Thirukkural"),
      __(" 748.
      Howe'er the circling foe may strive access to win,
      A fort should give the victory to those who guard within.
      <br><b>Exp:</b> That is a fort whose inmates are able to overcome without losing their ground, even abler men who have besieged it.
      ", "Thirukkural"),
      __(" 749.
      At outset of the strife a fort should foes dismay;
      And greatness gain by deeds in every glorious day.
      <br><b>Exp:</b> A fort is that which derives excellence from the stratagems made (by its inmates) to defeat their enemies in the battlefield.
      ", "Thirukkural"),
      __(" 750.
      Howe'er majestic castled walls may rise,
      To craven souls no fortress strength supplies.
      <br><b>Exp:</b> Although a fort may possess all (the above-said) excellence, it is, as it were without these, if its inmates possess not the excellence of action.
      ", "Thirukkural"),

      // 2.3.3. Way of Accumulating Wealth

      __(" 751.
      Nothing exists save wealth, that can
      Change man of nought to worthy man.
      <br><b>Exp:</b> Besides wealth there is nothing that can change people of no importance into those of (some)
      importance.
      ", "Thirukkural"),
      __(" 752.
      Those who have nought all will despise;
      All raise the wealthy to the skies.
      <br><b>Exp:</b> All despise the poor; (but) all praise the rich.
      ", "Thirukkural"),
      __(" 753.
      Wealth, the lamp unfailing, speeds to every land,
      Dispersing darkness at its lord's command.
      <br><b>Exp:</b> The imperishable light of wealth goes into regions desired (by its owner) and destroys the darkness (of enmity therein).
      ", "Thirukkural"),
      __(" 754.
      Their wealth, who blameless means can use aright,
      Is source of virtue and of choice delight.
      <br><b>Exp:</b> The wealth acquired with a knowledge of the proper means and without foul practices will yield
      virtue and happiness.
      ", "Thirukkural"),
      __(" 755.
      Wealth gained by loss of love and grace,
      Let man cast off from his embrace.
      <br><b>Exp:</b> (Kings) should rather avoid than seek the accumulation of wealth which does not flow in with mercy and love.
      ", "Thirukkural"),
      __(" 756.
      Wealth that falls to him as heir, wealth from the kingdom's dues,
      The spoils of slaughtered foes; these are the royal revenues.
      <br><b>Exp:</b> Unclaimed wealth, wealth acquired by taxes, and wealth (got) by conquest of foes are (all) the wealth of the king.
      ", "Thirukkural"),
      __(" 757.
      'Tis love that kindliness as offspring bears:
      And wealth as bounteous nurse the infant rears.
      <br><b>Exp:</b> The child mercy which is borne by love grows under the care of the rich nurse of wealth.
      ", "Thirukkural"),
      __(" 758.
      As one to view the strife of elephants who takes his stand,
      On hill he's climbed, is he who works with money in his hand.
      <br><b>Exp:</b> An undertaking of one who has wealth in one's hands is like viewing an elephant-fight from a hill-top.
      ", "Thirukkural"),
      __(" 759.
      Make money! Foeman's insolence o'ergrown
      To lop away no keener steel is known.
      <br><b>Exp:</b> Accumulate wealth; it will destroy the arrogance of (your) foes; there is no weapon sharper than it.
      ", "Thirukkural"),
      __(" 760.
      Who plenteous store of glorious wealth have gained,
      By them the other two are easily obtained.
      <br><b>Exp:</b> To those who have honestly acquired an abundance of riches, the other two, (virtue and pleasure) are things easy (of acquisition).
      ", "Thirukkural"),

      // 2.3.4. The Excellence of an Army

      __(" 761.
      A conquering host, complete in all its limbs, that fears no wound,
      Mid treasures of the king is chiefest found.
      <br><b>Exp:</b> The army which is complete in (its) parts and conquers without fear of wounds is the chief wealth of the king.
      ", "Thirukkural"),
      __(" 762.
      In adverse hour, to face undaunted might of conquering foe,
      Is bravery that only veteran host can show.
      <br><b>Exp:</b> Ancient army can alone have the valour which makes it stand by its king at the time of defeat, fearless of wounds and unmindful of its reduced strength.
      ", "Thirukkural"),
      __(" 763.
      Though, like the sea, the angry mice send forth their battle cry;
      What then? The dragon breathes upon them, and they die!
      <br><b>Exp:</b> What if (a host of) hostile rats roar like the sea ? They will perish at the mere breath of the cobra.
      ", "Thirukkural"),
      __(" 764.
      That is a host, by no defeats, by no desertions shamed,
      For old hereditary courage famed.
      <br><b>Exp:</b> That indeed is an army which has stood firm of old without suffering destruction or deserting (to the enemy).
      ", "Thirukkural"),
      __(" 765.
      That is a 'host' that joins its ranks, and mightily withstands,
      Though death with sudden wrath should fall upon its bands.
      <br><b>Exp:</b> That indeed is an army which is capable of offering a united resistance, even if Yama advances
      against it with fury.
      ", "Thirukkural"),
      __(" 766.
      Valour with honour, sure advance in glory's path, with confidence;
      To warlike host these four are sure defence.
      <br><b>Exp:</b> Valour, honour, following in the excellent-footsteps (of its predecessors) and trust-worthiness; these four alone constitute the safeguard of an army.
      ", "Thirukkural"),
      __(" 767.
      A valiant army bears the onslaught, onward goes,
      Well taught with marshalled ranks to meet their coming foes.
      <br><b>Exp:</b> That is an army which knowing the art of warding off an impending struggle, can bear against the dust-van (of a hostile force).
      ", "Thirukkural"),
      __(" 768.
      Though not in war offensive or defensive skilled;
      An army gains applause when well equipped and drilled.
      <br><b>Exp:</b> Though destitute of courage to fight and strength (to endure), an army may yet gain renown by the splendour of its appearance.
      ", "Thirukkural"),
      __(" 769.
      Where weakness, clinging fear and poverty
      Are not, the host will gain the victory.
      <br><b>Exp:</b> An army can triumph (over its foes) if it is free from diminution; irremediable aversion and poverty.
      ", "Thirukkural"),
      __(" 770.
      Though men abound, all ready for the war,
      No army is where no fit leaders are.
      <br><b>Exp:</b> Though an army may contain a large number of permanent soldiers, it cannot last if it has no
      generals.
      ", "Thirukkural"),

      // 2.3.5. Military Spirit

      __(" 771.
      Ye foes! stand not before my lord! for many a one
      Who did my lord withstand, now stands in stone!
      <br><b>Exp:</b> O my foes, stand not before my leader; (for) many are those who did so but afterwards stood (in the
      shape of) statues.
      ", "Thirukkural"),
      __(" 772.
      Who aims at elephant, though dart should fail, has greater praise.
      Than he who woodland hare with winged arrow slays.
      <br><b>Exp:</b> It is more pleasant to hold the dart that has missed an elephant than that which has hit hare in the forest.
      ", "Thirukkural"),
      __(" 773.
      Fierceness in hour of strife heroic greatness shows;
      Its edge is kindness to our suffering foes.
      <br><b>Exp:</b> The learned say that fierceness (incontest with a foe) is indeed great valour; but to become a
      benefactor in case of accident (to a foe) is the extreme (limit) of that valour.
      ", "Thirukkural"),
      __(" 774.
      At elephant he hurls the dart in hand; for weapon pressed,
      He laughs and plucks the javelin from his wounded breast.
      <br><b>Exp:</b> The hero who after casting the lance in his hand on an elephant, comes (in search of another) will pluck the one (that sticks) in his body and laugh (exultingly).
      ", "Thirukkural"),
      __(" 775.
      To hero fearless must it not defeat appear,
      If he but wink his eye when foemen hurls his spear.
      <br><b>Exp:</b> Is it not a defeat to the valiant to wink and destroy their ferocious look when a lance in cast at them (by their foe) ?
      ", "Thirukkural"),
      __(" 776.
      The heroes, counting up their days, set down as vain
      Each day when they no glorious wound sustain.
      <br><b>Exp:</b> The hero will reckon among wasted days all those on which he had not received severe wounds.
      ", "Thirukkural"),
      __(" 777.
      Who seek for world-wide fame, regardless of their life,
      The glorious clasp adorns, sign of heroic strife.
      <br><b>Exp:</b> The fastening of ankle-ring by those who disire a world-wide renown and not (the safety of) their lives is like adorning (themselves).
      ", "Thirukkural"),
      __(" 778.
      Fearless they rush where'er 'the tide of battle rolls';
      The king's reproof damps not the ardour of their eager souls.
      <br><b>Exp:</b> The heroes who are not afraid of losing their life in a contest will not cool their ardour, even if the king prohibits (their fighting).
      ", "Thirukkural"),
      __(" 779.
      Who says they err, and visits them scorn,
      Who die and faithful guard the vow they've sworn?
      <br><b>Exp:</b> Who would reproach with failure those who seal their oath with their death ?
      ", "Thirukkural"),
      __(" 780.
      If monarch's eyes o'erflow with tears for hero slain,
      Who would not beg such boon of glorious death to gain?
      <br><b>Exp:</b> If (heroes) can so die as to fill with tears the eyes of their rulers, such a death deserves to be obtained even by begging.
      ", "Thirukkural"),

      // 2.3.6. Friendship

      __(" 781.
      What so hard for men to gain as friendship true?
      What so sure defence 'gainst all that foe can do?
      <br><b>Exp:</b> What things are there so difficult to acquire as friendship ? What guards are there so difficult to break through by the efforts (of one's foes) ?
      ", "Thirukkural"),
      __(" 782.
      Friendship with men fulfilled of good Waxes like the crescent moon;
      Friendship with men of foolish mood, Like the full orb, waneth soon.
      <br><b>Exp:</b> The friendship of the wise waxes like the new moon; (but) that of fools wanes like the full moon.
      ", "Thirukkural"),
      __(" 783.
      Learned scroll the more you ponder, Sweeter grows the mental food;
      So the heart by use grows fonder, Bound in friendship with the good.
      <br><b>Exp:</b> Like learning, the friendship of the noble, the more it is cultivated, the more delightful does it become.
      ", "Thirukkural"),
      __(" 784.
      Nor for laughter only friendship all the pleasant day,
      But for strokes of sharp reproving, when from right you stray.
      <br><b>Exp:</b> Friendship is to be practised not for the purpose of laughing but for that of being beforehand in giving one another sharp rebukes in case of transgression.
      ", "Thirukkural"),
      __(" 785.
      Not association constant, not affection's token bind;
      'Tis the unison of feeling friends unites of kindred mind.
      <br><b>Exp:</b> Living together and holding frequent intercourse are not necessary (for friendship); (mutual)
      understanding can alone create a claim for it.
      ", "Thirukkural"),
      __(" 786.
      Not the face's smile of welcome shows the friend sincere,
      But the heart's rejoicing gladness when the friend is near.
      <br><b>Exp:</b> The love that dwells (merely in the smiles of the face is not friendship; (but) that which dwells deep in the smiles of the heart is true friendship.
      ", "Thirukkural"),
      __(" 787.
      Friendship from ruin saves, in way of virtue keeps;
      In troublous time, it weeps with him who weeps.
      <br><b>Exp:</b> (True) friendship turns aside from evil (ways) makes (him) walk in the (good) way, and, in case of loss if shares his sorrow (with him).
      ", "Thirukkural"),
      __(" 788.
      As hand of him whose vesture slips away,
      Friendship at once the coming grief will stay.
      <br><b>Exp:</b> (True) friendship hastens to the rescue of the afflicted (as readily) as the hand of one whose garment is loosened (before an assembly).
      ", "Thirukkural"),
      __(" 789.
      And where is friendship's royal seat? In stable mind,
      Where friend in every time of need support may find.
      <br><b>Exp:</b> Friendship may be said to be on its throne when it possesses the power of supporting one at all times and under all circumstances, (in the practice or virtue and wealth).
      ", "Thirukkural"),
      __(" 790.
      Mean is the friendship that men blazon forth,
      'He's thus to me' and 'such to him my worth'.
      <br><b>Exp:</b> Though friends may praise one another saying, \"He is so intimate with us, and we so much (with
      him)\"; (still) such friendship will appear mean.
      ", "Thirukkural"),

      // 2.3.7. Investigation in forming Friendships

      __(" 791.
      To make an untried man your friend is ruin sure;
      For friendship formed unbroken must endure.
      <br><b>Exp:</b> As those who are of a friendly nature will not forsake (a friend) after once loving (him), there is no evil so great as contracting a friendship without due inquiry.
      ", "Thirukkural"),
      __(" 792.
      Alliance with the man you have not proved and proved again,
      In length of days will give you mortal pain.
      <br><b>Exp:</b> The friendship contracted by him who has not made repeated inquiry will in the end grieve (him) to death.
      ", "Thirukkural"),
      __(" 793.
      Temper, descent, defects, associations free
      From blame: know these, then let the man be friend to thee.
      <br><b>Exp:</b> Make friendship (with one) after ascertaining (his) character, birth, defects and the whole of one's relations.
      ", "Thirukkural"),
      __(" 794.
      Who, born of noble race, from guilt would shrink with shame,
      Pay any price so you as friend that man may claim.
      <br><b>Exp:</b> The friendship of one who belongs to a (good) family and is afraid of (being charged with) guilt, is worth even purchasing.
      ", "Thirukkural"),
      __(" 795.
      Make them your chosen friend whose words repentance move,
      With power prescription's path to show, while evil they reprove.
      <br><b>Exp:</b> You should examine and secure the friendship of those who can speak so as to make you weep over a crime (before its commission) or rebuke you severely (after you have done it) and are able to teach you (the ways of) the world.
      ", "Thirukkural"),
      __(" 796.
      Ruin itself one blessing lends:
      'Tis staff that measures out one's friends.
      <br><b>Exp:</b> Even in ruin there is some good; (for) it is a rod by which one may measure fully (the affection of one's) relations.
      ", "Thirukkural"),
      __(" 797.
      'Tis gain to any man, the sages say,
      Friendship of fools to put away.
      <br><b>Exp:</b> It is indead a gain for one to renounce the friendship of fools.
      ", "Thirukkural"),
      __(" 798.
      Think not the thoughts that dwarf the soul; nor take
      For friends the men who friends in time of grief forsake.
      <br><b>Exp:</b> Do not think of things that discourage your mind, nor contract friendship with those who would
      forsake you in adversity.
      ", "Thirukkural"),
      __(" 799.
      Of friends deserting us on ruin's brink,
      'Tis torture e'en in life's last hour to think.
      <br><b>Exp:</b> The very thought of the friendship of those who have deserted one at the approach of adversity will burn one's mind at the time of death.
      ", "Thirukkural"),
      __(" 800.
      Cling to the friendship of the spotless one's; whate'er you pay.
      Renounce alliance with the men of evil way.
      <br><b>Exp:</b> Continue to enjoy the friendship of the pure; (but) renounce even with a gift, the friendship of those who do not agree (with the world).
      ", "Thirukkural"),

        // 2.3.8. Familiarity

      __(" 801.
      Familiarity is friendship's silent pact,
      That puts restraint on no familiar act.
      <br><b>Exp:</b> Imtimate friendship is that which cannot in the least be injured by (things done through the) right (of longstanding intimacy).
      ", "Thirukkural"),
      __(" 802.
      Familiar freedom friendship's very frame supplies;
      To be its savour sweet is duty of the wise.
      <br><b>Exp:</b> The constituents of friendship are (things done through) the right of intimacy; to be pleased with such a right is the duty of the wise.
      ", "Thirukkural"),
      __(" 803.
      When to familiar acts men kind response refuse,
      What fruit from ancient friendship's use?
      <br><b>Exp:</b> Of what avail is long-standing friendship, if friends do not admit as their own actions done through the right of intimacy ?
      ", "Thirukkural"),
      __(" 804.
      When friends unbidden do familiar acts with loving heart,
      Friends take the kindly deed in friendly part.
      <br><b>Exp:</b> If friends, through the right of friendship, do (anything) without being asked, the wise will be pleased with them on account of its desirability.
      ", "Thirukkural"),
      __(" 805.
      Not folly merely, but familiar carelessness,
      Esteem it, when your friends cause you distress.
      <br><b>Exp:</b> If friends should perform what is painful, understand that it is owing not only to ignorance, but also to the strong claims of intimacy.
      ", "Thirukkural"),
      __(" 806.
      Who stand within the bounds quit not, though loss impends,
      Association with the old familiar friends.
      <br><b>Exp:</b> Those who stand within the limits (of true friendship) will not even in adversity give up the intimacy of long-standing friends.
      ", "Thirukkural"),
      __(" 807.
      True friends, well versed in loving ways,
      Cease not to love, when friend their love betrays.
      <br><b>Exp:</b> Those who have (long) stood in the path of affection will not give it up even if their friends cause (them) their ruin.
      ", "Thirukkural"),
      __(" 808.
      In strength of friendship rare of friend's disgrace who will not hear,
      The day his friend offends will day of grace to him appear.
      <br><b>Exp:</b> To those who understand that by which they should not listen to (tales about) the faults of their friends, that is a (profitable) day on which the latter may commit a fault.
      ", "Thirukkural"),
      __(" 809.
      Friendship of old and faithful friends,
      Who ne'er forsake, the world commends.
      <br><b>Exp:</b> They will be loved by the world, who have not forsaken the friendship of those with whom they have kept up an unbroken long-standing intimacy.
      ", "Thirukkural"),
      __(" 810.
      Ill-wishers even wish them well, who guard.
      For ancient friends, their wonted kind regard.
      <br><b>Exp:</b> Even enemies will love those who have never changed in their affection to their long-standingfriends.
      ", "Thirukkural"),

        // 2.3.9. Evil Friendship

      __(" 811.
      Though evil men should all-absorbing friendship show,
      Their love had better die away than grow.
      <br><b>Exp:</b> The decrease of friendship with those who look as if they would eat you up (through excess of love) while they are really destitute of goodness is far better than its increase.
      ", "Thirukkural"),
      __(" 812.
      What though you gain or lose friendship of men of alien heart,
      Who when you thrive are friends, and when you fail depart?
      <br><b>Exp:</b> Of what avail is it to get or lose the friendship of those who love when there is gain and leave when there is none ?
      ", "Thirukkural"),
      __(" 813.
      These are alike: the friends who ponder friendship's gain
      Those who accept whate'er you give, and all the plundering train.
      <br><b>Exp:</b> Friendship who calculate the profits (of their friendship), prostitutes who are bent on obtaining their gains, and thieves are (all) of the same character.
      ", "Thirukkural"),
      __(" 814.
      A steed untrained will leave you in the tug of war;
      Than friends like that to dwell alone is better far.
      <br><b>Exp:</b> Solitude is more to be desired than the society of those who resemble the untrained horses which throw down (their riders) in the fields of battle.
      ", "Thirukkural"),
      __(" 815.
      'Tis better not to gain than gain the friendship profitless
      Of men of little minds, who succour fails when dangers press.
      <br><b>Exp:</b> It is far better to avoid that to contract the evil friendship of the base who cannot protect (their friends) even when appointed to do so.
      ", "Thirukkural"),
      __(" 816.
      Better ten million times incur the wise man's hate,
      Than form with foolish men a friendship intimate.
      <br><b>Exp:</b> The hatred of the wise is ten-million times more profitable than the excessive intimacy of the fool.", "Thirukkural"),
      __(" 817.
      From foes ten million fold a greater good you gain,
      Than friendship yields that's formed with laughers vain.
      <br><b>Exp:</b> What comes from enemies is a hundred million times more profitable than what comes from the
      friendship of those who cause only laughter.
      ", "Thirukkural"),
      __(" 818.
      Those men who make a grievous toil of what they do
      On your behalf, their friendship silently eschew.
      <br><b>Exp:</b> Gradually abandon without revealing (beforehand) the friendship of those who pretend inability to carry out what they (really) could do.
      ", "Thirukkural"),
      __(" 819.
      E'en in a dream the intercourse is bitterness
      With men whose deeds are other than their words profess.
      <br><b>Exp:</b> The friendship of those whose actions do not agree with their words will distress (one) even in (one's) dreams.
      ", "Thirukkural"),
      __(" 820.
      In anywise maintain not intercourse with those,
      Who in the house are friends, in hall are slandering foes.
      <br><b>Exp:</b> Avoid even the least approach to a contraction of friendship with those who would love you in private but ridicule you in public.
      ", "Thirukkural"),

      // 2.3.10. Unreal Friendship

      __(" 821.
      Anvil where thou shalt smitten be, when men occasion find,
      Is friendship's form without consenting mind.
      <br><b>Exp:</b> The friendship of those who behave like friends without inward affection is a weapon that may be thrown when a favourable opportunity presents itself.
      ", "Thirukkural"),
      __(" 822.
      Friendship of those who seem our kin, but are not really kind.
      Will change from hour to hour like woman's mind.
      <br><b>Exp:</b> The friendship of those who seem to be friends while they are not, will change like the love of women.
      ", "Thirukkural"),
      __(" 823.
      To heartfelt goodness men ignoble hardly may attain,
      Although abundant stores of goodly lore they gain.
      <br><b>Exp:</b> Though (one's) enemies may have mastered many good books, it will be impossible for them to
      become truly loving at heart.
      ", "Thirukkural"),
      __(" 824.
      'Tis fitting you should dread dissemblers' guile,
      Whose hearts are bitter while their faces smile.
      <br><b>Exp:</b> One should fear the deceitful who smile sweetly with their face but never love with their heart.", "Thirukkural"),
      __(" 825.
      When minds are not in unison, 'its never; just,
      In any words men speak to put your trust.
      <br><b>Exp:</b> In nothing whatever is it proper to rely on the words of those who do not love with their heart.
      ", "Thirukkural"),
      __(" 826.
      Though many goodly words they speak in friendly tone,
      The words of foes will speedily be known.
      <br><b>Exp:</b> Though (one's) foes may utter good things as though they were friends, once will at once understand (their evil, import).
      ", "Thirukkural"),
      __(" 827.
      To pliant speech from hostile lips give thou no ear;
      'Tis pliant bow that show the deadly peril near!
      <br><b>Exp:</b> Since the bending of the bow bespeaks evil, one should not accept (as good) the humiliating speeches of one's foes.
      ", "Thirukkural"),
      __(" 828.
      In hands that worship weapon ten hidden lies;
      Such are the tears that fall from foeman's eyes.
      <br><b>Exp:</b> A weapon may be hid in the very hands with which (one's) foes adore (him) (and) the tears they shed are of the same nature.
      ", "Thirukkural"),
      __(" 829.
      'Tis just, when men make much of you, and then despise,
      To make them smile, and slap in friendship's guise.
      <br><b>Exp:</b> It is the duty of kings to affect great love but make it die (inwardly); as regard those foes who shew them great friendship but despise them (in their heart).
      ", "Thirukkural"),
      __(" 830.
      When time shall come that foes as friends appear,
      Then thou, to hide a hostile heart, a smiling face may'st wear.
      <br><b>Exp:</b> When one's foes begin to affect friendship, one should love them with one's looks, and, cherishing no love in the heart, give up (even the former).
      ", "Thirukkural"),

        // 2.3.11. Folly

      __(" 831.
      What one thing merits folly's special name.
      Letting gain go, loss for one's own to claim!
      <br><b>Exp:</b> Folly is one (of the chief defects); it is that which (makes one) incur loss and forego gain.
      ", "Thirukkural"),
      __(" 832.
      'Mid follies chiefest folly is to fix your love
      On deeds which to your station unbefitting prove.
      <br><b>Exp:</b> The greatest folly is that which leads one to take delight in doing what is forbidden.
      ", "Thirukkural"),
      __(" 833.
      Ashamed of nothing, searching nothing out, of loveless heart,
      Nought cherishing, 'tis thus the fool will play his part.
      <br><b>Exp:</b> Shamelessness indifference (to what must be sought after), harshness, and aversion for everything (that ought to be desired) are the qualities of the fool.
      ", "Thirukkural"),
      __(" 834.
      The sacred law he reads and learns, to other men expounds,-
      Himself obeys not; where can greater fool be found?
      <br><b>Exp:</b> There are no greater fools than he who, though he has read and understood (a great deal) and even taught it to others, does not walk according to his own teaching.
      ", "Thirukkural"),
      __(" 835.
      The fool will merit hell in one brief life on earth,
      In which he entering sinks through sevenfold round of birth.
      <br><b>Exp:</b> A fool can procure in a single birth a hell into which he may enter and suffer through all the seven births.
      ", "Thirukkural"),
      __(" 836.
      When fool some task attempts with uninstructed pains,
      It fails; nor that alone, himself he binds with chains.
      <br><b>Exp:</b> If the fool, who knows not how to act undertakes a work, he will (certainly) fail. (But) is it all ? He will even adorn himself with fetters.
      ", "Thirukkural"),
      __(" 837.
      When fools are blessed with fortune's bounteous store,
      Their foes feed full, their friends are prey to hunger sore.
      <br><b>Exp:</b> If a fool happens to get an immense fortune, his neighbours will enjoy it while his relations starve.", "Thirukkural"),
      __(" 838.
      When folly's hand grasps wealth's increase, 'twill be
      As when a mad man raves in drunken glee.
      <br><b>Exp:</b> A fool happening to possess something is like the intoxication of one who is (already) giddy.
      ", "Thirukkural"),
      __(" 839.
      Friendship of fools is very pleasant thing,
      Parting with them will leave behind no sting.
      <br><b>Exp:</b> The friendship between fools is exceedingly delightful (to each other): for at parting there will be nothing to cause them pain.
      ", "Thirukkural"),
      __(" 840.
      Like him who seeks his couch with unwashed feet,
      Is fool whose foot intrudes where wise men meet.
      <br><b>Exp:</b> The appearance of a fool in an assembly of the learned is like placing (one's) unwashed feet on a bed.
      ", "Thirukkural"),

      // 2.3.12. Ignorance

      __(" 841.
      Want of knowledge, 'mid all wants the sorest want we deem;
      Want of other things the world will not as want esteem.
      <br><b>Exp:</b> The want of wisdom is the greatest of all wants; but that of wealth the world will not regard as such.", "Thirukkural"),
      __(" 842.
      The gift of foolish man, with willing heart bestowed, is nought,
      But blessing by receiver's penance bought.
      <br><b>Exp:</b> (The cause of) a fool cheerfully giving (something) is nothing else but the receiver's merit (in a former birth).
      ", "Thirukkural"),
      __(" 843.
      With keener anguish foolish men their own hearts wring,
      Than aught that even malice of their foes can bring.
      <br><b>Exp:</b> The suffering that fools inflict upon themselves is hardly possible even to foes.
      ", "Thirukkural"),
      __(" 844.
      What is stupidity? The arrogance that cries,
      'Behold, we claim the glory of the wise.'
      <br><b>Exp:</b> What is called want of wisdom is the vanity which says, \"We are wise\".
      ", "Thirukkural"),
      __(" 845.
      If men what they have never learned assume to know,
      Upon their real learning's power a doubt 'twill throw.
      <br><b>Exp:</b> Fools pretending to know what has not been read (by them) will rouse suspicion even as to what they have thoroughly mastered.
      ", "Thirukkural"),
      __(" 846.
      Fools are they who their nakedness conceal,
      And yet their faults unveiled reveal.
      <br><b>Exp:</b> Even to cover one's nakedness would be folly, if (one's) faults were not covered (by forsaking them).", "Thirukkural"),
      __(" 847.
      From out his soul who lets the mystic teachings die,
      Entails upon himself abiding misery.
      <br><b>Exp:</b> The fool who neglects precious counsel does, of his own accord, a great injury to himself.
      ", "Thirukkural"),
      __(" 848.
      Advised, he heeds not; of himself knows nothing wise;
      This man's whole life is all one plague until he dies.
      <br><b>Exp:</b> The fool will not perform (his duties) even when advised nor ascertain them himself; such a soul is a burden (to the earth) till it departs (from the body).
      ", "Thirukkural"),
      __(" 849.
      That man is blind to eyes that will not see who knowledge shows;-
      The blind man still in his blind fashion knows.
      <br><b>Exp:</b> One who would teach a fool will (simply) betray his folly; and the fool would (still) think himself \"wise in his own conceit\".
      ", "Thirukkural"),
      __(" 850.
      Who what the world affirms as false proclaim,
      O'er all the earth receive a demon's name.
      <br><b>Exp:</b> He who denies the existence of what the world believes in will be regarded as a demon on earth.
      ", "Thirukkural"),

      // 2.3.13. Hostility

      __(" 851.
      Hostility disunion's plague will bring,
      That evil quality, to every living thing.
      <br><b>Exp:</b> The disease which fosters the evil of disunion among all creatures is termed hatred by the wise.", "Thirukkural"),
      __(" 852.
      Though men disunion plan, and do thee much despite
      'Tis best no enmity to plan, nor evil deeds requite.
      <br><b>Exp:</b> Though disagreeable things may be done from (a feeling of) disunion, it is far better that nothing painful be done from (that of) hatred.
      ", "Thirukkural"),
      __(" 853.
      If enmity, that grievous plague, you shun,
      Endless undying praises shall be won.
      <br><b>Exp:</b> To rid one-self of the distressing dtsease of hatred will bestow (on one) a never-decreasing
      imperishable fame.
      ", "Thirukkural"),
      __(" 854.
      Joy of joys abundant grows,
      When malice dies that woe of woes.
      <br><b>Exp:</b> If hatred which is the greatest misery is destroyed, it will yield the greatest delight.
      ", "Thirukkural"),
      __(" 855.
      If men from enmity can keep their spirits free,
      Who over them shall gain the victory?
      <br><b>Exp:</b> Who indeed would think of conquering those who naturally shrink back from hatred ?
      ", "Thirukkural"),
      __(" 856.
      The life of those who cherished enmity hold dear,
      To grievous fault and utter death is near.
      <br><b>Exp:</b> Failure and ruin are not far from him who says it is sweet to excel in hatred.
      ", "Thirukkural"),
      __(" 857.
      The very truth that greatness gives their eyes can never see,
      Who only know to work men woe, fulfilled of enmity.
      <br><b>Exp:</b> Those whose judgement brings misery through its connection with hatred cannot understand the
      triumphant nature of truth.
      ", "Thirukkural"),
      __(" 858.
      'Tis gain to turn the soul from enmity;
      Ruin reigns where this hath mastery.
      <br><b>Exp:</b> Shrinking back from hatred will yield wealth; indulging in its increase will hasten ruin.
      ", "Thirukkural"),
      __(" 859.
      Men think not hostile thought in fortune's favouring hour,
      They cherish enmity when in misfortune's power.
      <br><b>Exp:</b> At the approach of wealth one will not think of hatred (but) to secure one's ruin, one will look to its increase.", "Thirukkural"),
      __(" 860.
      From enmity do all afflictive evils flow;
      But friendliness doth wealth of kindly good bestow.
      <br><b>Exp:</b> All calamities are caused by hatred; but by the delight (of friendship) is caused the great wealth of good virtues.
      ", "Thirukkural"),

      // 2.3.14. The Might of Hatred

      __(" 861.
      With stronger than thyself, turn from the strife away;
      With weaker shun not, rather court the fray.
      <br><b>Exp:</b> Avoid offering resistance to the strong; (but) never fail to cherish enmity towards the weak.
      ", "Thirukkural"),
      __(" 862.
      No kinsman's love, no strength of friends has he;
      How can he bear his foeman's enmity?
      <br><b>Exp:</b> How can he who is unloving, destitute of powerful aids, and himself without strength overcome the might of his foe ?
      ", "Thirukkural"),
      __(" 863.
      A craven thing! knows nought, accords with none, gives nought away;
      To wrath of any foe he falls an easy prey.
      <br><b>Exp:</b> In the estimation of foes miserably weak is he, who is timid, ignorant, unsociable and niggardly.
      ", "Thirukkural"),
      __(" 864.
      His wrath still blazes, every secret told; each day
      This man's in every place to every foe an easy prey.
      <br><b>Exp:</b> He who neither refrains from anger nor keeps his secrets will at all times and in all places be easily conquered by all.
      ", "Thirukkural"),
      __(" 865.
      No way of right he scans, no precepts bind, no crimes affright,
      No grace of good he owns; such man's his foes' delight.
      <br><b>Exp:</b> (A) pleasing (object) to his foes is he who reads not moral works, does nothing that is enjoined by them cares not for reproach and is not possessed of good qualities.
      ", "Thirukkural"),
      __(" 866.
      Blind in his rage, his lustful passions rage and swell;
      If such a man mislikes you, like it well.
      <br><b>Exp:</b> Highly to be desired is the hatred of him whose anger is blind, and whose lust increases beyond
      measure.
      ", "Thirukkural"),
      __(" 867.
      Unseemly are his deeds, yet proffering aid, the man draws nigh:
      His hate- 'tis cheap at any price- be sure to buy!
      <br><b>Exp:</b> It is indeed necessary to obtain even by purchase the hatred of him who having begun (a work) does what is not conductive (to its accomplishment).
      ", "Thirukkural"),
      __(" 868.
      No gracious gifts he owns, faults many cloud his fame;
      His foes rejoice, for none with kindred claim.
      <br><b>Exp:</b> He will become friendless who is without (any good) qualities. and whose faults are many; (such a character) is a help to (his) foes.
      ", "Thirukkural"),
      __(" 869.
      The joy of victory is never far removed from those
      Who've luck to meet with ignorant and timid foes.
      <br><b>Exp:</b> There will be no end of lofty delights to the victorious, if their foes are (both) ignorant and timid.
      ", "Thirukkural"),
      __(" 870.
      The task of angry war with men unlearned in virtue's lore
      Who will not meet, glory shall meet him never more.
      <br><b>Exp:</b> The light (of fame) will never be gained by him who gains not the trifling reputation of having fought an unlearned (foe).
      ", "Thirukkural"),

        // 2.3.15. Knowing the Quality of Hate

      __(" 871.
      For Hate, that ill-conditioned thing not e'en in jest.
      Let any evil longing rule your breast.
      <br><b>Exp:</b> The evil of hatred is not of a nature to be desired by one even in sport.
      ", "Thirukkural"),
      __(" 872.
      Although you hate incur of those whose ploughs are bows,
      Make not the men whose ploughs are words your foes!
      <br><b>Exp:</b> Though you may incur the hatred of warriors whose ploughs are bows, incur not that of ministers
      whose ploughs are words.
      ", "Thirukkural"),
      __(" 873.
      Than men of mind diseased, a wretch more utterly forlorn,
      Is he who stands alone, object of many foeman's scorn.
      <br><b>Exp:</b> He who being alone, incurs the hatred of many is more infatuated than even mad men.
      ", "Thirukkural"),
      __(" 874.
      The world secure on his dexterity depends,
      Whose worthy rule can change his foes to friends.
      <br><b>Exp:</b> The world abides in the greatness of that good-natured man who behaves so as to turn hatred into friendship.
      ", "Thirukkural"),
      __(" 875.
      Without ally, who fights with twofold enemy o'ermatched,
      Must render one of these a friend attached.
      <br><b>Exp:</b> He who is alone and helpless while his foes are two should secure one of them as an agreeable help (to himself).
      ", "Thirukkural"),
      __(" 876.
      Whether you trust or not, in time of sore distress,
      Questions of diff'rence or agreement cease to press.
      <br><b>Exp:</b> Though (one's foe is) aware or not of one's misfortune one should act so as neither to join nor
      separate (from him).
      ", "Thirukkural"),
      __(" 877.
      To those who know them not, complain not of your woes;
      Nor to your foeman's eyes infirmities disclose.
      <br><b>Exp:</b> Relate not your suffering even to friends who are ignorant of it, nor refer to your weakness in the presence of your foes.
      ", "Thirukkural"),
      __(" 878.
      Know thou the way, then do thy part, thyself defend;
      Thus shall the pride of those that hate thee have an end.
      <br><b>Exp:</b> The joy of one's foes will be destroyed if one guards oneself by knowing the way (of acting) and securing assistance.
      ", "Thirukkural"),
      __(" 879.
      Destroy the thorn, while tender point can work thee no offence;
      Matured by time, 'twill pierce the hand that plucks it thence.
      <br><b>Exp:</b> A thorny tree should be felled while young, (for) when it is grown it will destroy the hand of the feller.
      ", "Thirukkural"),
      __(" 880.
      But breathe upon them, and they surely die,
      Who fail to tame the pride of angry enemy.
      <br><b>Exp:</b> Those who do not destroy the pride of those who hate (them) will certainly not exist even to breathe.
      ", "Thirukkural"),

      // 2.3.16. Enmity within

      __(" 881.
      Water and shade, if they unwholesome prove, will bring you pain.
      And qualities of friends who treacherous act, will be your bane.
      <br><b>Exp:</b> Shade and water are not pleasant, (if) they cause disease; so are the qualities of (one's) relations not agreeable, (if) they cause pain.
      ", "Thirukkural"),
      __(" 882.
      Dread not the foes that as drawn swords appear;
      Friendship of foes, who seem like kinsmen, fear!
      <br><b>Exp:</b> Fear not foes (who say they would cut) like a sword; (but) fear the friendship of foes (who seemingly act) like relations.
      ", "Thirukkural"),
      __(" 883.
      Of hidden hate beware, and guard thy life;
      In troublous time 'twill deeper wound than potter's knife.
      <br><b>Exp:</b> Fear internal enmity and guard yourself; (if not) it will destroy (you) in an evil hour, as surely as the tool which cuts the potter's clay.
      ", "Thirukkural"),
      __(" 884.
      If secret enmities arise that minds pervert,
      Then even kin unkind will work thee grievous hurt.
      <br><b>Exp:</b> The secret enmity of a person whose mind in unreformed will lead to many evils causing disaffection among (one's) relations.
      ", "Thirukkural"),
      __(" 885.
      Amid one's relatives if hidden hath arise,
      'Twill hurt inflict in deadly wise.
      <br><b>Exp:</b> If there appears internal hatred in a (king's) family; it will lead to many a fatal crime.
      ", "Thirukkural"),
      __(" 886.
      If discord finds a place midst those who dwelt at one before,
      'Tis ever hard to keep destruction from the door.
      <br><b>Exp:</b> If hatred arises among (one's) own people, it will be hardly possible (for one) to escape death.
      ", "Thirukkural"),
      __(" 887.
      As casket with its cover, though in one they live alway,
      No union to the house where hate concealed hath sway.
      <br><b>Exp:</b> Never indeed will a family subject to internal hatred unite (really) though it may present an apparent union like that of a casket and its lid.
      ", "Thirukkural"),
      __(" 888.
      As gold with which the file contends is worn away,
      So strength of house declines where hate concealed hath sway.
      <br><b>Exp:</b> A family subject to internal hatred will wear out and lose its strength like iron that has been filed away.
      ", "Thirukkural"),
      __(" 889.
      Though slight as shred of 'seasame' seed it be,
      Destruction lurks in hidden enmity.
      <br><b>Exp:</b> Although internal hatred be as small as the fragment of the sesamum (seed), still does destruction dwell in it.
      ", "Thirukkural"),
      __(" 890.
      Domestic life with those who don't agree,
      Is dwelling in a shed with snake for company.
      <br><b>Exp:</b> Living with those who do not agree (with one) is like dwelling with a cobra (in the same) hut.
      ", "Thirukkural"),

      // 2.3.17. Not Offending the Great

      __(" 891.
      The chiefest care of those who guard themselves from ill,
      Is not to slight the powers of those who work their mighty will.
      <br><b>Exp:</b> Not to disregard the power of those who can carry out (their wishes) is more important than all the watchfulness of those who guard (themselves against evil).
      ", "Thirukkural"),
      __(" 892.
      If men will lead their lives reckless of great men's will,
      Such life, through great men's powers, will bring perpetual ill.
      <br><b>Exp:</b> To behave without respect for the great (rulers) will make them do (us) irremediable evils.
      ", "Thirukkural"),
      __(" 893.
      Who ruin covet let them shut their ears, and do despite
      To those who, where they list to ruin have the might.
      <br><b>Exp:</b> If a person desires ruin, let him not listen to the righteous dictates of law, but commit crimes against those who are able to slay (other sovereigns).
      ", "Thirukkural"),
      __(" 894.
      When powerless man 'gainst men of power will evil deeds essay,
      Tis beck'ning with the hand for Death to seize them for its prey.
      <br><b>Exp:</b> The weak doing evil to the strong is like beckoning Yama to come (and destroy them).
      ", "Thirukkural"),
      __(" 895.
      Who dare the fiery wrath of monarchs dread,
      Where'er they flee, are numbered with the dead.
      <br><b>Exp:</b> Those who have incurred the wrath of a cruel and mighty potentate will not prosper wherever they may go.
      ", "Thirukkural"),
      __(" 896.
      Though in the conflagration caught, he may escape from thence:
      He 'scapes not who in life to great ones gives offence.
      <br><b>Exp:</b> Though burnt by a fire (from a forest), one may perhaps live; (but) never will he live who has shown disrespect to the great (devotees).
      ", "Thirukkural"),
      __(" 897.
      Though every royal gift, and stores of wealth your life should crown,
      What are they, if the worthy men of mighty virtue frown?
      <br><b>Exp:</b> If a king incurs the wrath of the righteous great, what will become of his government with its splendid auxiliaries and (all) its untold wealth ?
      ", "Thirukkural"),
      __(" 898.
      If they, whose virtues like a mountain rise, are light esteemed;
      They die from earth who, with their households, ever-during seemed.
      <br><b>Exp:</b> If (the) hill-like (devotees) resolve on destruction, those who seemed to be everlasting will be destroyed root and branch from the earth.
      ", "Thirukkural"),
      __(" 899.
      When blazes forth the wrath of men of lofty fame,
      Kings even fall from high estate and perish in the flame.
      <br><b>Exp:</b> If those of exalted vows burst in a rage, even (Indra) the king will suffer a sudden loss and be entirely ruined.
      ", "Thirukkural"),
      __(" 900.
      Though all-surpassing wealth of aid the boast,
      If men in glorious virtue great are wrath, they're lost.
      <br><b>Exp:</b> Though in possession of numerous auxiliaries, they will perish who are-exposed to the wrath of the noble whose penance is boundless.
      ", "Thirukkural"),

      // 2.3.18. Being led by Women

      __(" 901.
      Who give their soul to love of wife acquire not nobler gain;
      Who give their soul to strenuous deeds such meaner joys disdain.
      <br><b>Exp:</b> Those who lust after their wives will not attain the excellence of virtue; and it is just this that is not desired by those who are bent on acquiring wealth.
      ", "Thirukkural"),
      __(" 902.
      Who gives himself to love of wife, careless of noble name
      His wealth will clothe him with o'erwhelming shame.
      <br><b>Exp:</b> The wealth of him who, regardless (of his manliness), devotes himself to his wife's feminine nature will cause great shame (to ali men) and to himself;
      ", "Thirukkural"),
      __(" 903.
      Who to his wife submits, his strange, unmanly mood
      Will daily bring him shame among the good.
      <br><b>Exp:</b> The frailty that stoops to a wife will always make (her husband) feel ashamed among the good.
      ", "Thirukkural"),
      __(" 904.
      No glory crowns e'en manly actions wrought
      By him who dreads his wife, nor gives the other world a thought.
      <br><b>Exp:</b> The undertaking of one, who fears his wife and is therefore destitute of (bliss), will never be
      applauded.
      ", "Thirukkural"),
      __(" 905.
      Who quakes before his wife will ever tremble too,
      Good deeds to men of good deserts to do.
      <br><b>Exp:</b> He that fears his wife will always be afraid of doing good deeds (even) to the good.
      ", "Thirukkural"),
      __(" 906.
      Though, like the demi-gods, in bliss they dwell secure from harm,
      Those have no dignity who fear the housewife's slender arm.
      <br><b>Exp:</b> They that fear the bamboo-like shoulders of their wives will be destitute of manliness though they may flourish like the Gods.
      ", "Thirukkural"),
      __(" 907.
      The dignity of modest womanhood excels
      His manliness, obedient to a woman's law who dwells.
      <br><b>Exp:</b> Even shame faced womanhood is more to be esteemed than the shameless manhood that performs
      the behests of a wife.
      ", "Thirukkural"),
      __(" 908.
      Who to the will of her with beauteous brow their lives conform,
      Aid not their friends in need, nor acts of charity perform.
      <br><b>Exp:</b> Those who yield to the wishes of their wives will neither relieve the wants of (their) friends nor perform virtuous deeds.
      ", "Thirukkural"),
      __(" 909.
      No virtuous deed, no seemly wealth, no pleasure, rests
      With them who live obedient to their wives' behests.
      <br><b>Exp:</b> From those who obey the commands of their wives are to be expected neither deeds of virtue, nor
      those of wealth nor (even) those of pleasure.
      ", "Thirukkural"),
      __(" 910.
      Where pleasures of the mind, that dwell in realms of thought, abound,
      Folly, that springs from overweening woman's love, is never found.
      <br><b>Exp:</b> The foolishness that results from devotion to a wife will never be found in those who possess a
      reflecting mind and a prosperity (flowing) therefrom.
      ", "Thirukkural"),

      // 2.3.19. Wanton Women

      __(" 911.
      Those that choice armlets wear who seek not thee with love,
      But seek thy wealth, their pleasant words will ruin prove.
      <br><b>Exp:</b> The sweet words of elegant braceleted (prostitutes) who desire (a man) not from affection but from avarice, will cause sorrow.
      ", "Thirukkural"),
      __(" 912.
      Who weigh the gain, and utter virtuous words with vicious heart,
      Weighing such women's worth, from their society depart.
      <br><b>Exp:</b> One must ascertain the character of the ill-natured women who after ascertaining the wealth (of a man) speak (as if they were) good natured-ones, and avoid intercourse (with them).
      ", "Thirukkural"),
      __(" 913.
      As one in darkened room, some stranger corpse inarms,
      Is he who seeks delight in mercenary women's charms!
      <br><b>Exp:</b> The false embraces of wealth-loving women are like (hired men) embracing a strange corpse in a
      dark room.
      ", "Thirukkural"),
      __(" 914.
      Their worthless charms, whose only weal is wealth of gain,
      From touch of these the wise, who seek the wealth of grace, abstain.
      <br><b>Exp:</b> The wise who seek the wealth of grace will not desire the base favours of those who regard wealth (and not pleasure) as (their) riches.
      ", "Thirukkural"),
      __(" 915.
      From contact with their worthless charms, whose charms to all are free,
      The men with sense of good and lofty wisdom blest will flee;
      <br><b>Exp:</b> Those whose knowledge is made excellent by their (natural) sense will not covet the trffling delights of those whose favours are common (to all).
      ", "Thirukkural"),
      __(" 916.
      From touch of those who worthless charms, with wanton arts, display,
      The men who would their own true good maintain will turn away.
      <br><b>Exp:</b> Those who would spread (the fame of) their own goodness will not desire the shoulders of those,who rejoice in their accomplishments and bestow their despicable favours (on all who pay).
      ", "Thirukkural"),
      __(" 917.
      Who cherish alien thoughts while folding in their feigned embrace,
      These none approach save those devoid of virtue's grace.
      <br><b>Exp:</b> Those who are destitute of a perfectly (reformed) mind will covet the shoulders of those who
      embrace (them) while their hearts covet other things.
      ", "Thirukkural"),
      __(" 918.
      As demoness who lures to ruin woman's treacherous love
      To men devoid of wisdom's searching power will prove.
      <br><b>Exp:</b> The wise say that to such as are destitute of discerning sense the embraces of faithless women are (as ruinous as those of) the celestail female.
      ", "Thirukkural"),
      __(" 919.
      The wanton's tender arm, with gleaming jewels decked,
      Is hell, where sink degraded souls of men abject.
      <br><b>Exp:</b> The delicate shoulders of prostitutes with excellent jewels are a hell into which are plunged the ignorant base.
      ", "Thirukkural"),
      __(" 920.
      Women of double minds, strong drink, and dice; to these giv'n o'er,
      Are those on whom the light of Fortune shines no more.
      <br><b>Exp:</b> Treacherous women, liquor, and gambling are the associates of such as have forsaken by Fortune.
      ", "Thirukkural"),

      //2.3.20. Not Drinking Palm-Wine

      __(" 921.
      Who love the palm's intoxicating juice, each day,
      No rev'rence they command, their glory fades away.
      <br><b>Exp:</b> Those who always thirst after drink will neither inspire fear (in others) nor retain the light (of their fame).
      ", "Thirukkural"),
      __(" 922.
      Drink not inebriating draught. Let him count well the cost.
      Who drinks, by drinking, all good men's esteem is lost.
      <br><b>Exp:</b> Let no liquor be drunk; if it is desired, let it be drunk by those who care not for esteem of the great.
      ", "Thirukkural"),
      __(" 923.
      The drunkard's joy is sorrow to his mother's eyes;
      What must it be in presence of the truly wise?
      <br><b>Exp:</b> Intoxication is painful even in the presence of (one's) mother; what will it not then be in that of the wise ?
      ", "Thirukkural"),
      __(" 924.
      Shame, goodly maid, will turn her back for aye on them
      Who sin the drunkard's grievous sin, that all condemn.
      <br><b>Exp:</b> The fair maid of modesty will turn her back on those who are guilty of the great and abominable crime of drunkenness.
      ", "Thirukkural"),
      __(" 925.
      With gift of goods who self-oblivion buys,
      Is ignorant of all that man should prize.
      <br><b>Exp:</b> To give money and purchase unconsciousness is the result of one's ignorance of (one's own actions).
      ", "Thirukkural"),
      __(" 926.
      Sleepers are as the dead, no otherwise they seem;
      Who drink intoxicating draughts, they poison quaff, we deem.
      <br><b>Exp:</b> They that sleep resemble the deed; (likewise) they that drink are no other than poison-eaters.
      ", "Thirukkural"),
      __(" 927.
      Who turn aside to drink, and droop their heavy eye,
      Shall be their townsmen's jest, when they the fault espy.
      <br><b>Exp:</b> Those who always intoxicate themselves by a private (indulgence in) drink; will have their secrets detected and laughed at by their fellow-townsmen.
      ", "Thirukkural"),
      __(" 928.
      No more in secret drink, and then deny thy hidden fraud;
      What in thy mind lies hid shall soon be known abroad.
      <br><b>Exp:</b> Let (the drunkard) give up saying \"I have never drunk\"; (for) the moment (he drinks) he will simply betray his former attempt to conceal.
      ", "Thirukkural"),
      __(" 929.
      Like him who, lamp in hand, would seek one sunk beneath the wave.
      Is he who strives to sober drunken man with reasonings grave.
      <br><b>Exp:</b> Reasoning with a drunkard is like going under water with a torch in search of a drowned man.
      ", "Thirukkural"),
      __(" 930.
      When one, in sober interval, a drunken man espies,
      Does he not think, 'Such is my folly in my revelries'?
      <br><b>Exp:</b> When (a drunkard) who is sober sees one who is not, it looks as if he remembered not the evil effects of his (own) drink.
      ", "Thirukkural"),

      // 2.3.21. Gaming (Gambling)

      __(" 931.
      Seek not the gamester's play; though you should win,
      Your gain is as the baited hook the fish takes in.
      <br><b>Exp:</b> Though able to win, let not one desire gambling; (for) even what is won is like a fish swallowing the iron in fish-hook.
      ", "Thirukkural"),
      __(" 932.
      Is there for gamblers, too, that gaining one a hundred lose, some way
      <br><b>Exp:</b> That they may good obtain, and see a prosperous day?
      Is there indeed a means of livelihood that can bestow happiness on gamblers who gain one and lose a
      hundred ?
      ", "Thirukkural"),
      __(" 933.
      If prince unceasing speak of nought but play,
      Treasure and revenue will pass from him away.
      <br><b>Exp:</b> If the king is incessantly addicted to the rolling dice in the hope of gain, his wealth and the resources thereof will take their departure and fall into other's hands.
      ", "Thirukkural"),
      __(" 934.
      Gaming brings many woes, and ruins fair renown;
      Nothing to want brings men so surely down.
      <br><b>Exp:</b> There is nothing else that brings (us) poverty like gambling which causes many a misery and
      destroys (one's) reputation.
      ", "Thirukkural"),
      __(" 935.
      The dice, and gaming-hall, and gamester's art, they eager sought,
      Thirsting for gain- the men in other days who came to nought.
      <br><b>Exp:</b> Penniless are those who by reason of their attachment would never forsake gambling, the gamblingplace and the handling (of dice).
      ", "Thirukkural"),
      __(" 936.
      Gambling's Misfortune's other name: o'er whom she casts her veil,
      They suffer grievous want, and sorrows sore bewail.
      <br><b>Exp:</b> Those who are swallowed by the goddess called \"gambling\" will never have their hunger satisfied, but suffer the pangs of hell in the next world.
      ", "Thirukkural"),
      __(" 937.
      Ancestral wealth and noble fame to ruin haste,
      If men in gambler's halls their precious moments waste.
      <br><b>Exp:</b> To waste time at the place of gambling will destroy inherited wealth and goodness of character.
      ", "Thirukkural"),
      __(" 938.
      Gambling wastes wealth, to falsehood bends the soul: it drives away
      All grace, and leaves the man to utter misery a prey.
      <br><b>Exp:</b> Gambling destroys property, teaches falsehood, puts an end to benevolence, and brings in misery
      (here and hereafter).
      ", "Thirukkural"),
      __(" 939.
      Clothes, wealth, food, praise, and learning, all depart
      From him on gambler's gain who sets his heart.
      <br><b>Exp:</b> The habit of gambling prevents the attainment of these five: clothing, wealth, food, fame and learning.
      ", "Thirukkural"),
      __(" 940.
      Howe'er he lose, the gambler's heart is ever in the play;
      E'en so the soul, despite its griefs, would live on earth alway.
      <br><b>Exp:</b> As the gambler loves (his vice) the more he loses by it, so does the soul love (the body) the more it suffers through it.
      ", "Thirukkural"),

      // 2.3.22. Medicine

      __(" 941.
      The learned books count three, with wind as first; of these,
      As any one prevail, or fail; 'twill cause disease.
      <br><b>Exp:</b> If (food and work are either) excessive or deficient, the three things enumerated by (medical)
      writers, flatulence, biliousness, and phlegm, will cause (one) disease.
      ", "Thirukkural"),
      __(" 942.
      No need of medicine to heal your body's pain,
      If, what you ate before digested well, you eat again.
      <br><b>Exp:</b> No medicine is necessary for him who eats after assuring (himself) that what he has (already) eaten has been digested.
      ", "Thirukkural"),
      __(" 943.
      Who has a body gained may long the gift retain,
      If, food digested well, in measure due he eat again.
      <br><b>Exp:</b> If (one's food has been) digested let one eat with moderation; (for) that is the way to prolong the life of an embodied soul.
      ", "Thirukkural"),
      __(" 944.
      Knowing the food digested well, when hunger prompteth thee,
      With constant care, the viands choose that well agree.
      <br><b>Exp:</b> (First) assure yourself that your food has been digested and never fail to eat, when very hungry, whatever is not disagreeable (to you).
      ", "Thirukkural"),
      __(" 945.
      With self-denial take the well-selected meal;
      So shall thy frame no sudden sickness feel.
      <br><b>Exp:</b> There will be no disaster to one's life if one eats with moderation, food that is not disagreeable.
      ", "Thirukkural"),
      __(" 946.
      On modest temperance as pleasures pure,
      So pain attends the greedy epicure.
      <br><b>Exp:</b> As pleasure dwells with him who eats moderately, so disease (dwells) with the glutton who eats
      voraciously.
      ", "Thirukkural"),
      __(" 947.
      Who largely feeds, nor measure of the fire within maintains,
      That thoughtless man shall feel unmeasured pains.
      <br><b>Exp:</b> He will be afflicted with numberless diseases, who eats immoderately, ignorant (of the rules of
      health).
      ", "Thirukkural"),
      __(" 948.
      Disease, its cause, what may abate the ill:
      Let leech examine these, then use his skill.
      <br><b>Exp:</b> Let the physician enquire into the (nature of the) disease, its cause and its method of cure and treat it faithfully according to (medical rule).
      ", "Thirukkural"),
      __(" 949.
      The habitudes of patient and disease, the crises of the ill
      These must the learned leech think over well, then use his skill.
      <br><b>Exp:</b> The learned (physician) should ascertain the condition of his patient; the nature of his disease, and the season (of the year) and (then) proceed (with his treatment).
      ", "Thirukkural"),
      __(" 950.
      For patient, leech, and remedies, and him who waits by patient's side,
      The art of medicine must fourfold code of laws provide.
      <br><b>Exp:</b> Medical science consists of four parts, viz., patient, physician, medicine and compounder; and each of these (again) contains four sub-divisions.
      ", "Thirukkural"),

      // 2.4 Miscellaneous
      // 2.4.1. Nobility

      __(" 951.
      Save in the scions of a noble house, you never find
      Instinctive sense of right and virtuous shame combined.
      <br><b>Exp:</b> Consistency (of thought, word and deed) and fear (of sin) are conjointly natural only to the high-born.
      ", "Thirukkural"),
      __(" 952.
      In these three things the men of noble birth fail not:
      In virtuous deed and truthful word, and chastened thought.
      <br><b>Exp:</b> The high-born will never deviate from these three; good manners, truthfulness and modesty.
      ", "Thirukkural"),
      __(" 953.
      The smile, the gift, the pleasant word, unfailing courtesy
      These are the signs, they say, of true nobility.
      <br><b>Exp:</b> A cheerful countenance, liberality, pleasant words, and an unreviling disposition, these four are said to be the proper qualities of the truly high-born.
      ", "Thirukkural"),
      __(" 954.
      Millions on millions piled would never win
      The men of noble race to soul-degrading sin.
      <br><b>Exp:</b> Though blessed with immense wealth, the noble will never do anything unbecoming.
      ", "Thirukkural"),
      __(" 955.
      Though stores for charity should fail within, the ancient race
      Will never lose its old ancestral grace.
      <br><b>Exp:</b> Though their means fall off, those born in ancient families, will not lose their character (for liberality).
      ", "Thirukkural"),
      __(" 956.
      Whose minds are set to live as fits their sire's unspotted fame,
      Stooping to low deceit, commit no deeds that gender shame.
      <br><b>Exp:</b> Those who seek to preserve the irreproachable honour of their families will not viciously do what is detrimental thereto.
      ", "Thirukkural"),
      __(" 957.
      The faults of men of noble race are seen by every eye,
      As spots on her bright orb that walks sublime the evening sky.
      <br><b>Exp:</b> The defects of the noble will be observed as clearly as the dark spots in the moon.
      ", "Thirukkural"),
      __(" 958.
      If lack of love appear in those who bear some goodly name,
      'Twill make men doubt the ancestry they claim.
      <br><b>Exp:</b> If one of a good family betrays want of affection, his descent from it will be called in question.
      ", "Thirukkural"),
      __(" 959.
      Of soil the plants that spring thereout will show the worth:
      The words they speak declare the men of noble birth.
      <br><b>Exp:</b> As the sprout indicates the nature of the soil, (so) the speech of the noble indicates (that of one's birth).
      ", "Thirukkural"),
      __(" 960.
      Who seek for good the grace of virtuous shame must know;
      Who seek for noble name to all must reverence show.
      <br><b>Exp:</b> He who desires a good name must desire modesty; and he who desires (the continuance of) a family greatness must be submissive to all.
      ", "Thirukkural"),

      // 2.4.2. Honour

      __(" 961.
      Though linked to splendours man no otherwise may gain,
      Reject each act that may thine honour's clearness stain.
      <br><b>Exp:</b> Actions that would degrade (one's) family should not be done; though they may be so important that not doing them would end in death.
      ", "Thirukkural"),
      __(" 962.
      Who seek with glory to combine honour's untarnished fame,
      Do no inglorious deeds, though men accord them glory's name.
      <br><b>Exp:</b> Those who desire (to maintain their) honour, will surely do nothing dishonourable, even for the sake of fame.
      ", "Thirukkural"),
      __(" 963.
      Bow down thy soul, with increase blest, in happy hour;
      Lift up thy heart, when stript of all by fortune's power.
      <br><b>Exp:</b> In great prosperity humility is becoming; dignity, in great adversity.
      ", "Thirukkural"),
      __(" 964.
      Like hairs from off the head that fall to earth,
      When fall'n from high estate are men of noble birth.
      <br><b>Exp:</b> They who have fallen from their (high) position are like the hair which has fallen from the head.
      ", "Thirukkural"),
      __(" 965.
      If meanness, slight as 'abrus' grain, by men be wrought,
      Though like a hill their high estate, they sink to nought.
      <br><b>Exp:</b> Even those who are exalted like a hill will be thought low, if they commit deeds that are debasing.
      ", "Thirukkural"),
      __(" 966.
      It yields no praise, nor to the land of Gods throws wide the gate:
      Why follow men who scorn, and at their bidding wait?
      <br><b>Exp:</b> Of what good is it (for the high-born) to go and stand in vain before those who revile him ? it only brings him loss of honour and exclusion from heaven.
      ", "Thirukkural"),
      __(" 967.
      Better 'twere said, 'He's perished!' than to gain
      The means to live, following in foeman's train.
      <br><b>Exp:</b> It is better for a man to be said of him that he died in his usual state than that he eked out his life by following those who disgraced him.
      ", "Thirukkural"),
      __(" 968.
      When high estate has lost its pride of honour meet,
      Is life, that nurses this poor flesh, as nectar sweet?
      <br><b>Exp:</b> For the high-born to keep their body in life when their honour is gone will certainly not prove a remedy against death.
      ", "Thirukkural"),
      __(" 969.
      Like the wild ox that, of its tuft bereft, will pine away,
      Are those who, of their honour shorn, will quit the light of day.
      <br><b>Exp:</b> Those who give up (their) life when (their) honour is at stake are like the yark which kills itself at the loss of (even one of) its hairs.
      ", "Thirukkural"),
      __(" 970.
      Who, when dishonour comes, refuse to live, their honoured memory
      Will live in worship and applause of all the world for aye!
      <br><b>Exp:</b> The world will (always) praise and adore the fame of the honourable who would rather die than
      suffer indignity.
      ", "Thirukkural"),

      // 2.4.3. Greatness

      __(" 971.
      The light of life is mental energy; disgrace is his
      Who says, 'I 'ill lead a happy life devoid of this.'
      <br><b>Exp:</b> One's light is the abundance of one's courage; one's darkness is the desire to live destitute of such (a state of mind.)
      ", "Thirukkural"),
      __(" 972.
      All men that live are one in circumstances of birth;
      Diversities of works give each his special worth.
      <br><b>Exp:</b> All human beings agree as regards their birth but differ as regards their characteristics, because of the different qualities of their actions.
      ", "Thirukkural"),
      __(" 973.
      The men of lofty line, whose souls are mean, are never great
      The men of lowly birth, when high of soul, are not of low estate.
      <br><b>Exp:</b> Though (raised) above, the base cannot become great; though (brought) low, the great cannot
      become base. ", "Thirukkural"),
      __(" 974.
      Like single-hearted women, greatness too,
      Exists while to itself is true.
      <br><b>Exp:</b> Even greatness, like a woman's chastity, belongs only to him who guards himself.
      ", "Thirukkural"),
      __(" 975.
      The man endowed with greatness true,
      Rare deeds in perfect wise will do.
      <br><b>Exp:</b> (Though reduced) the great will be able to perform, in the proper way, deeds difficult (for others to do).
      ", "Thirukkural"),
      __(" 976.
      'As votaries of the truly great we will ourselves enroll,'
      Is thought that enters not the mind of men of little soul.
      <br><b>Exp:</b> It is never in the nature of the base to seek the society of the great and partake of their nature.
      ", "Thirukkural"),
      __(" 977.
      Whene'er distinction lights on some unworthy head,
      Then deeds of haughty insolence are bred.
      <br><b>Exp:</b> Even nobility of birth, wealth and learning, if in (the possession of) the base, will (only) produce everincreasing pride.
      ", "Thirukkural"),
      __(" 978.
      Greatness humbly bends, but littleness always
      Spreads out its plumes, and loads itself with praise.
      <br><b>Exp:</b> The great will always humble himself; but the mean will exalt himself in self-admiration.
      ", "Thirukkural"),
      __(" 979.
      Greatness is absence of conceit; meanness, we deem,
      Riding on car of vanity supreme.
      <br><b>Exp:</b> Freedom from conceit is (the nature of true) greatness; (while) obstinacy therein is (that of)
      meanness.
      ", "Thirukkural"),
      __(" 980.
      Greatness will hide a neighbour's shame;
      Meanness his faults to all the world proclaim.
      <br><b>Exp:</b> The great hide the faults of others; the base only divulge them.
      ", "Thirukkural"),

        // 2.4.4. Perfectness

      __(" 981.
      All goodly things are duties to the men, they say
      Who set themselves to walk in virtue's perfect way.
      <br><b>Exp:</b> It is said that those who are conscious of their duty and behave with a perfect goodness will regard as natural all that is good.
      ", "Thirukkural"),
      __(" 982.
      The good of inward excellence they claim,
      The perfect men; all other good is only good in name.
      <br><b>Exp:</b> The only delight of the perfect is that of their goodness; all other (sensual) delights are not to be included among any (true) delights.
      ", "Thirukkural"),
      __(" 983.
      Love, modesty, beneficence, benignant grace,
      With truth, are pillars five of perfect virtue's resting-place.
      <br><b>Exp:</b> Affection, fear (of sin), benevolence, favour and truthfulness; these are the five pillars on which perfect goodness rests.
      ", "Thirukkural"),
      __(" 984.
      The type of 'penitence' is virtuous good that nothing slays;
      To speak no ill of other men is perfect virtue's praise.
      <br><b>Exp:</b> Penance consists in the goodness that kills not , and perfection in the goodness that tells not others' faults.
      ", "Thirukkural"),
      __(" 985.
      Submission is the might of men of mighty acts; the sage
      With that same weapon stills his foeman's rage.
      <br><b>Exp:</b> Stooping (to inferiors) is the strength of those who can accomplish (an undertaking); and that is the weapon with which the great avert their foes.
      ", "Thirukkural"),
      __(" 986.
      What is perfection's test? The equal mind.
      To bear repulse from even meaner men resigned.
      <br><b>Exp:</b> The touch-stone of perfection is to receive a defeat even at the hands of one's inferiors.
      ", "Thirukkural"),
      __(" 987.
      What fruit doth your perfection yield you, say!
      Unless to men who work you ill good repay?
      <br><b>Exp:</b> Of what avail is perfect goodness if it cannot do pleasing things even to those who have pained (it) ?
      ", "Thirukkural"),
      __(" 988.
      To soul with perfect virtue's strength endued,
      Brings no disgrace the lack of every earthly good.
      <br><b>Exp:</b> Poverty is no disgrace to one who abounds in good qualities.
      ", "Thirukkural"),
      __(" 989.
      Call them of perfect virtue's sea the shore,
      Who, though the fates should fail, fail not for evermore.
      <br><b>Exp:</b> Those who are said to be the shore of the sea of perfection will never change, though ages may
      change.
      ", "Thirukkural"),
      __(" 990.
      The mighty earth its burthen to sustain must cease,
      If perfect virtue of the perfect men decrease.
      <br><b>Exp:</b> If there is a defect in the character of the perfect, (even) the great world cannot bear (its) burden.
      ", "Thirukkural"),

      // 2.4.5. Courtesy

      __(" 991.
      Who easy access give to every man, they say,
      Of kindly courtesy will learn with ease the way.
      <br><b>Exp:</b> If one is easy of access to all, it will be easy for one to obtain the virtue called goodness.
      ", "Thirukkural"),
      __(" 992.
      Benevolence and high born dignity,
      These two are beaten paths of courtesy.
      <br><b>Exp:</b> Affectionateness and birth in a good family, these two constitute what is called a proper behaviour to
      all.", "Thirukkural"),
      __(" 993.
      Men are not one because their members seem alike to outward view;
      Similitude of kindred quality makes likeness true.
      <br><b>Exp:</b> Resemblance of bodies is no resemblance of souls; true resemblance is the resemblance of qualities that attract.
      ", "Thirukkural"),
      __(" 994.
      Of men of fruitful life, who kindly benefits dispense,
      The world unites to praise the 'noble excellence.'
      <br><b>Exp:</b> The world applauds the character of those whose usefulness results from their equity and charity.
      ", "Thirukkural"),
      __(" 995.
      Contempt is evil though in sport. They who man's nature know,
      E'en in their wrath, a courteous mind will show.
      <br><b>Exp:</b> Reproach is painful to one even in sport; those (therefore) who know the nature of others exhibit (pleasing) qualities even when they are hated.
      ", "Thirukkural"),
      __(" 996.
      The world abides; for 'worthy' men its weight sustain.
      Were it not so, 'twould fall to dust again.
      <br><b>Exp:</b> The (way of the) world subsists by contact with the good; if not, it would bury itself in the earth and perish.", "Thirukkural"),
      __(" 997.
      Though sharp their wit as file, as blocks they must remain,
      Whose souls are void of 'courtesy humane'.
      <br><b>Exp:</b> He who is destitute of (true) human qualities (only) resembles a tree, though he may possess the sharpness of a file.
      ", "Thirukkural"),
      __(" 998.
      Though men with all unfriendly acts and wrongs assail,
      'Tis uttermost disgrace in 'courtesy' to fail.
      <br><b>Exp:</b> It is wrong (for the wise) not to exhibit (good) qualities even towards those who bearing no friendship (for them) do only what is hateful.", "Thirukkural"),
      __(" 999.
      To him who knows not how to smile in kindly mirth,
      Darkness in daytime broods o'er all the vast and mighty earth.
      <br><b>Exp:</b> To those who cannot rejoice, the wide world is buried darkness even in (broad) day light.
      ", "Thirukkural"),
      __(" 1000.
      Like sweet milk soured because in filthy vessel poured,
      Is ample wealth in churlish man's unopened coffers stored.
      <br><b>Exp:</b> The great wealth obtained by one who has no goodness will perish like pure milk spoilt by the
      impurity of the vessel.
      ", "Thirukkural"),

      // 2.4.6. Wealth without Benefaction

      __(" 1001.
      Who fills his house with ample store, enjoying none,
      Is dead. Nought with the useless heap is done.
      <br><b>Exp:</b> He who does not enjoy the immense riches he has heaped up in his house, is (to be reckoned as)
      dead, (for) there is nothing achieved (by him).
      ", "Thirukkural"),
      __(" 1002.
      Who giving nought, opines from wealth all blessing springs,
      Degraded birth that doting miser's folly brings.
      <br><b>Exp:</b> He who knows that wealth yields every pleasure and yet is so blind as to lead miserly life will be born a demon.
      ", "Thirukkural"),
      __(" 1003.
      Who lust to heap up wealth, but glory hold not dear,
      It burthens earth when on the stage of being they appear.
      <br><b>Exp:</b> A burden to the earth are men bent on the acquisition of riches and not (true) fame.
      ", "Thirukkural"),
      __(" 1004.
      Whom no one loves, when he shall pass away,
      What doth he look to leave behind, I pray?
      <br><b>Exp:</b> What will the miser who is not liked (by any one) regard as his own (in the world to come) ?
      ", "Thirukkural"),
      __(" 1005.
      Amid accumulated millions they are poor,
      Who nothing give and nought enjoy of all they store.
      <br><b>Exp:</b> Those who neither give (to others) nor enjoy (their property) are (truly) destitute, though possessing immense riches.
      ", "Thirukkural"),
      __(" 1006.
      Their ample wealth is misery to men of churlish heart,
      Who nought themselves enjoy, and nought to worthy men impart.
      <br><b>Exp:</b> He who enjoys not (his riches) nor relieves the wants of the worthy is a disease to his wealth.
      ", "Thirukkural"),
      __(" 1007.
      Like woman fair in lonelihood who aged grows,
      Is wealth of him on needy men who nought bestows.
      <br><b>Exp:</b> The wealth of him who never bestows anything on the destitute is like a woman of beauty growing old without a husband.
      ", "Thirukkural"),
      __(" 1008.
      When he whom no man loves exults in great prosperity,
      'Tis as when fruits in midmost of the town some poisonous tree.
      <br><b>Exp:</b> The wealth of him who is disliked (by all) is like the fruit-bearing of the etty tree in the midst of a town.
      ", "Thirukkural"),
      __(" 1009.
      Who love abandon, self-afflict, and virtue's way forsake
      To heap up glittering wealth, their hoards shall others take.
      <br><b>Exp:</b> Strangers will inherit the riches that have been acquired without regard for friendship, comfort and charity.
      ", "Thirukkural"),
      __(" 1010.
      'Tis as when rain cloud in the heaven grows day,
      When generous wealthy man endures brief poverty.
      <br><b>Exp:</b> The short-lived poverty of those who are noble and rich is like the clouds becoming poor (for a
      while).
      ", "Thirukkural"),

      // 2.4.7. Shame

      __(" 1011.
      To shrink abashed from evil deed is 'generous shame';
      Other is that of bright-browed one of virtuous fame.
      <br><b>Exp:</b> True modesty is the fear of (evil) deeds; all other modesty is (simply) the bashfulness of virtuous maids.
      ", "Thirukkural"),
      __(" 1012.
      Food, clothing, and other things alike all beings own;
      By sense of shame the excellence of men is known.
      <br><b>Exp:</b> Food, clothing and the like are common to all men but modesty is peculiar to the good.
      ", "Thirukkural"),
      __(" 1013.
      All spirits homes of flesh as habitation claim,
      And perfect virtue ever dwells with shame.
      <br><b>Exp:</b> As the body is the abode of the spirit, so the excellence of modesty is the abode of perfection.
      ", "Thirukkural"),
      __(" 1014.
      And is not shame an ornament to men of dignity?
      Without it step of stately pride is piteous thing to see.
      <br><b>Exp:</b> Is not the modesty ornament of the noble ? Without it, their haughtiness would be a pain (to others).
      ", "Thirukkural"),
      __(" 1015.
      As home of virtuous shame by all the world the men are known,
      Who feel ashamed for others, guilt as for their own.
      <br><b>Exp:</b> The world regards as the abode of modesty him who fear his own and other's guilt.
      ", "Thirukkural"),
      __(" 1016.
      Unless the hedge of shame inviolate remain,
      For men of lofty soul the earth's vast realms no charms retain.
      <br><b>Exp:</b> The great make modesty their barrier (of defence) and not the wide world.
      ", "Thirukkural"),
      __(" 1017.
      The men of modest soul for shame would life an offering make,
      But ne'er abandon virtuous shame for life's dear sake.
      <br><b>Exp:</b> The modest would rather lose their life for the sake of modesty than lose modesty for the sake of life.
      ", "Thirukkural"),
      __(" 1018.
      Though know'st no shame, while all around asha med must be:
      Virtue will shrink away ashamed of thee!
      <br><b>Exp:</b> Virtue is likely to forsake him who shamelessly does what others are ashamed of.
      ", "Thirukkural"),
      __(" 1019.
      'Twill race consume if right observance fail;
      'Twill every good consume if shamelessness prevail.
      <br><b>Exp:</b> Want of manners injures one's family; but want of modesty injures one's character.
      ", "Thirukkural"),
      __(" 1020.
      'Tis as with strings a wooden puppet apes life's functions, when
      Those void of shame within hold intercourse with men.
      <br><b>Exp:</b> The actions of those who are without modesty at heart are like those of puppet moved by a string.
      ", "Thirukkural"),

      // 2.4.8. The Way of Maintaining the Family

      __(" 1021.
      Who says 'I'll do my work, nor slack my hand',
      His greatness, clothed with dignity supreme, shall stand.
      <br><b>Exp:</b> There is no higher greatness than that of one saying. I will not cease in my effort (to raise my family).
      ", "Thirukkural"),
      __(" 1022.
      The manly act and knowledge full, when these combine
      In deed prolonged, then lengthens out the race's line.
      <br><b>Exp:</b> One's family is raised by untiring perseverance in both effort and wise contrivances.
      ", "Thirukkural"),
      __(" 1023.
      'I'll make my race renowned,' if man shall say,
      With vest succinct the goddess leads the way.
      <br><b>Exp:</b> The Deity will clothe itself and appear before him who resolves on raising his family.
      ", "Thirukkural"),
      __(" 1024.
      Who labours for his race with unremitting pain,
      Without a thought spontaneously, his end will gain.
      <br><b>Exp:</b> Those who are prompt in their efforts (to better their family) need no deliberation, such efforts will of themselves succeed.
      ", "Thirukkural"),
      __(" 1025.
      With blameless life who seeks to build his race's fame,
      The world shall circle him, and kindred claim.
      <br><b>Exp:</b> People will eagerly seek the friendship of the prosperous soul who has raised his family without foul means.
      ", "Thirukkural"),
      __(" 1026.
      Of virtuous manliness the world accords the praise
      To him who gives his powers, the house from which he sprang to raise.
      <br><b>Exp:</b> A man's true manliness consists in making himself the head and benefactor of his family.
      ", "Thirukkural"),
      __(" 1027.
      The fearless hero bears the brunt amid the warrior throng;
      Amid his kindred so the burthen rests upon the strong.
      <br><b>Exp:</b> Like heroes in the battle-field, the burden (of protection etc.) is borne by those who are the most efficient in a family.
      ", "Thirukkural"),
      __(" 1028.
      Wait for no season, when you would your house uprear;
      'Twill perish, if you wait supine, or hold your honour dear.
      <br><b>Exp:</b> As a family suffers by (one's) indolence and false dignity there is to be so season (good or bad) to those who strive to raise their family.
      ", "Thirukkural"),
      __(" 1029.
      Is not his body vase that various sorrows fill,
      Who would his household screen from every ill?
      <br><b>Exp:</b> Is it only to suffering that his body is exposed who undertakes to preserve his family from evil ?
      ", "Thirukkural"),
      __(" 1030.
      When trouble the foundation saps the house must fall,
      If no strong hand be nigh to prop the tottering wall.
      <br><b>Exp:</b> If there are none to prop up and maintain a family (in distress), it will fall at the stroke of the axe of misfortune.
      ", "Thirukkural"),

      // 2.4.9. Agriculture

      __(" 1031.
      Howe'er they roam, the world must follow still the plougher's team;
      Though toilsome, culture of the ground as noblest toil esteem.
      <br><b>Exp:</b> Agriculture, though laborious, is the most excellent (form of labour); for people, though they go about (in search of various employments), have at last to resort to the farmer.
      ", "Thirukkural"),
      __(" 1032.
      The ploughers are the linch-pin of the world; they bear
      Them up who other works perform, too weak its toils to share.
      <br><b>Exp:</b> Agriculturists are (as it were) the linch-pin of the world for they support all other workers who cannot till the soil.
      ", "Thirukkural"),
      __(" 1033.
      Who ploughing eat their food, they truly live:
      The rest to others bend subservient, eating what they give.
      <br><b>Exp:</b> They alone live who live by agriculture; all others lead a cringing, dependent life.
      ", "Thirukkural"),
      __(" 1034.
      O'er many a land they 'll see their monarch reign,
      Whose fields are shaded by the waving grain.
      <br><b>Exp:</b> Patriotic farmers desire to bring all other states under the control of their own king.
      ", "Thirukkural"),
      __(" 1035.
      They nothing ask from others, but to askers give,
      Who raise with their own hands the food on which they live.
      <br><b>Exp:</b> Those whose nature is to live by manual labour will never beg but give something to those who beg.", "Thirukkural"),
      __(" 1036.
      For those who 've left what all men love no place is found,
      When they with folded hands remain who till the ground.
      <br><b>Exp:</b> If the farmer's hands are slackened, even the ascetic state will fail.
      ", "Thirukkural"),
      __(" 1037.
      Reduce your soil to that dry state, When ounce is quarter-ounce's weight;
      Without one handful of manure, Abundant crops you thus secure.
      <br><b>Exp:</b> If the land is dried so as to reduce one ounce of earth to a quarter, it will grow plentifully even without a handful of manure.
      ", "Thirukkural"),
      __(" 1038.
      To cast manure is better than to plough;
      Weed well; to guard is more than watering now
      <br><b>Exp:</b> Manuring is better than ploughing; after weeding, watching is better than watering (it).
      ", "Thirukkural"),
      __(" 1039.
      When master from the field aloof hath stood;
      Then land will sulk, like wife in angry mood.
      <br><b>Exp:</b> If the owner does not (personally) attend to his cultivation, his land will behave like an angry wife and yield him no pleasure.
      ", "Thirukkural"),
      __(" 1040.
      The earth, that kindly dame, will laugh to see,
      Men seated idle pleading poverty.
      <br><b>Exp:</b> The maiden, Earth, will laugh at the sight of those who plead poverty and lead an idle life.
      ", "Thirukkural"),

      // 2.4.10. Poverty

      __(" 1041.
      You ask what sharper pain than poverty is known;
      Nothing pains more than poverty, save poverty alone.
      <br><b>Exp:</b> There is nothing that afflicts (one) like poverty.
      ", "Thirukkural"),
      __(" 1042.
      Malefactor matchless! poverty destroys
      This world's and the next world's joys.
      <br><b>Exp:</b> When cruel poverty comes on, it deprives one of both the present and future (bliss).
      ", "Thirukkural"),
      __(" 1043.
      Importunate desire, which poverty men name,
      Destroys both old descent and goodly fame.
      <br><b>Exp:</b> Hankering poverty destroys at once the greatness of (one's) ancient descent and (the dignity of one's) speech.
      ", "Thirukkural"),
      __(" 1044.
      From penury will spring, 'mid even those of noble race,
      Oblivion that gives birth to words that bring disgrace.
      <br><b>Exp:</b> Even in those of high birth, poverty will produce the fault of uttering mean words.
      ", "Thirukkural"),
      __(" 1045.
      From poverty, that grievous woe,
      Attendant sorrows plenteous grow.
      <br><b>Exp:</b> The misery of poverty brings in its train many (more) miseries.
      ", "Thirukkural"),
      __(" 1046.
      Though deepest sense, well understood, the poor man's words convey,
      Their sense from memory of mankind will fade away.
      <br><b>Exp:</b> The words of the poor are profitless, though they may be sound in thought and clear in expression.
      ", "Thirukkural"),
      __(" 1047.
      From indigence devoid of virtue's grace,
      The mother e'en that bare, estranged, will turn her face.
      <br><b>Exp:</b> He that is reduced to absolute poverty will be regarded as a stranger even by his own mother.
      ", "Thirukkural"),
      __(" 1048.
      And will it come today as yesterday,
      The grief of want that eats my soul away?
      <br><b>Exp:</b> Is the poverty that almost killed me yesterday, to meet me today too ?
      ", "Thirukkural"),
      __(" 1049.
      Amid the flames sleep may men's eyelids close,
      In poverty the eye knows no repose.
      <br><b>Exp:</b> One may sleep in the midst of fire; but by no means in the midst of poverty.
      ", "Thirukkural"),
      __(" 1050.
      Unless the destitute will utterly themselves deny,
      They cause their neighbour's salt and vinegar to die.
      <br><b>Exp:</b> The destitute poor, who do not renounce their bodies, only consume their neighbour's salt and water.
      ", "Thirukkural"),

      // 2.4.11. Mendicancy

      __(" 1051.
      When those you find from whom 'tis meet to ask,- for aid apply;
      Theirs is the sin, not yours, if they the gift deny.
      <br><b>Exp:</b> If you meet with those that may be begged of, you may beg; (but) if they withhold (their gift) it is their blame and not yours.
      ", "Thirukkural"),
      __(" 1052.
      Even to ask an alms may pleasure give,
      If what you ask without annoyance you receive.
      <br><b>Exp:</b> Even begging may be pleasant, if what is begged for is obtained without grief (to him that begs).
      ", "Thirukkural"),
      __(" 1053.
      The men who nought deny, but know what's due, before their face
      To stand as suppliants affords especial grace.
      <br><b>Exp:</b> There is even a beauty in standing before and begging of those who are liberal in their gifts and understand their duty (to beggars).
      ", "Thirukkural"),
      __(" 1054.
      Like giving alms, may even asking pleasant seem,
      From men who of denial never even dream.
      <br><b>Exp:</b> To beg of such as never think of withholding (their charity) even in their dreams, is in fact the same as giving (it oneself);
      ", "Thirukkural"),
      __(" 1055.
      Because on earth the men exist, who never say them nay,
      Men bear to stand before their eyes for help to pray.
      <br><b>Exp:</b> As there are in the world those that give without refusing, there are (also) those that prefer to beg by simply standing before them.
      ", "Thirukkural"),
      __(" 1056.
      It those you find from evil of 'denial' free,
      At once all plague of poverty will flee.
      <br><b>Exp:</b> All the evil of begging will be removed at the sight of those who are far from the evil of refusing.
      ", "Thirukkural"),
      __(" 1057.
      If men are found who give and no harsh words of scorn employ,
      The minds of askers, through and through, will thrill with joy.
      <br><b>Exp:</b> Beggars rejoice exceedingly when they behold those who bestow (their alms) with kindness and
      courtesy.
      ", "Thirukkural"),
      __(" 1058.
      If askers cease, the mighty earth, where cooling fountains flow,
      Will be a stage where wooden puppets come and go.
      <br><b>Exp:</b> If there were no beggars, (the actions done in) the cool wide world would only resemble the
      movement of a puppet.
      ", "Thirukkural"),
      __(" 1059.
      What glory will there be to men of generous soul,
      When none are found to love the askers' role?
      <br><b>Exp:</b> What (praise) would there be to givers (of alms) if there were no beggars to ask for and reveive (them).", "Thirukkural"),
      __(" 1060.
      Askers refused from wrath must stand aloof;
      The plague of poverty itself is ample proof.
      <br><b>Exp:</b> He who begs ought not to be angry (at a refusal); for even the misery of (his own) poverty should be a sufficient reason (for so doing).
      ", "Thirukkural"),

      // 2.4.12. The Dread of Mendicancy

      __(" 1061.
      Ten million-fold 'tis greater gain, asking no alms to live,
      Even from those, like eyes in worth, who nought concealing gladly give.
      <br><b>Exp:</b> Not to beg (at all) even from those excellent persons who cheerfully give without refusing, will do immense good.
      ", "Thirukkural"),
      __(" 1062.
      If he that shaped the world desires that men should begging go,
      Through life's long course, let him a wanderer be and perish so.
      <br><b>Exp:</b> If the Creator of the world has decreed even begging as a means of livelihood, may he too go
      abegging and perish.
      ", "Thirukkural"),
      __(" 1063.
      Nothing is harder than the hardness that will say,
      'The plague of penury by asking alms we'll drive away.'
      <br><b>Exp:</b> There is no greater folly than the boldness with which one seeks to remedy the evils of poverty by begging (rather than by working).
      ", "Thirukkural"),
      __(" 1064.
      Who ne'er consent to beg in utmost need, their worth
      Has excellence of greatness that transcends the earth.
      <br><b>Exp:</b> Even the whole world cannot sufficiently praise the dignity that would not beg even in the midst of destitution.
      ", "Thirukkural"),
      __(" 1065.
      Nothing is sweeter than to taste the toil-won cheer,
      Though mess of pottage as tasteless as the water clear.
      <br><b>Exp:</b> Even thin gruel is ambrosia to him who has obtained it by labour.
      ", "Thirukkural"),
      __(" 1066.
      E'en if a draught of water for a cow you ask,
      Nought's so distasteful to the tongue as beggar's task.
      <br><b>Exp:</b> There is nothing more disgraceful to one's tongue than to use it in begging water even for a cow.
      ", "Thirukkural"),
      __(" 1067.
      One thing I beg of beggars all, 'If beg ye may,
      Of those who hide their wealth, beg not, I pray.'
      <br><b>Exp:</b> I beseech all beggars and say, \"If you need to beg, never beg of those who give unwillingly.\"
      ", "Thirukkural"),
      __(" 1068.
      The fragile bark of beggary
      Wrecked on denial's rock will lie.
      <br><b>Exp:</b> The unsafe raft of begging will split when it strikes on the rock of refusal.
      ", "Thirukkural"),
      __(" 1069.
      The heart will melt away at thought of beggary,
      With thought of stern repulse 'twill perish utterly.
      <br><b>Exp:</b> To think of (the evil of) begging is enough to melt one's heart; but to think of refusal is enough to break it.
      ", "Thirukkural"),
      __(" 1070.
      E'en as he asks, the shamefaced asker dies;
      Where shall his spirit hide who help denies?
      <br><b>Exp:</b> Saying \"No\" to a beggar takes away his life. (but as that very word will kill the refuser) where then would the latter's life hide itself ?
      ", "Thirukkural"),

      // 2.4.13. Baseness

      __(" 1071.
      The base resemble men in outward form, I ween;
      But counterpart exact to them I've never seen.
      <br><b>Exp:</b> The base resemble men perfectly (as regards form); and we have not seen such (exact) resemblance (among any other species).
      ", "Thirukkural"),
      __(" 1072.
      Than those of grateful heart the base must luckier be,
      Their minds from every anxious thought are free!
      <br><b>Exp:</b> The low enjoy more felicity than those who know what is good; for the former are not troubled with anxiety (as to the good).
      ", "Thirukkural"),
      __(" 1073.
      The base are as the Gods; they too
      Do ever what they list to do!
      <br><b>Exp:</b> The base resemble the Gods; for the base act as they like.
      ", "Thirukkural"),
      __(" 1074.
      When base men those behold of conduct vile,
      They straight surpass them, and exulting smile.
      <br><b>Exp:</b> The base feels proud when he sees persons whose acts meaner than his own.
      ", "Thirukkural"),
      __(" 1075.
      Fear is the base man's virtue; if that fail,
      Intense desire some little may avail.
      <br><b>Exp:</b> (The principle of) behaviour in the mean is chiefly fear; if not, hope of gain, to some extent.
      ", "Thirukkural"),
      __(" 1076.
      The base are like the beaten drum; for, when they hear
      The sound the secret out in every neighbour's ear.
      <br><b>Exp:</b> The base are like a drum that is beaten, for they unburden to others the secrets they have heard.
      ", "Thirukkural"),
      __(" 1077.
      From off their moistened hands no clinging grain they shake,
      Unless to those with clenched fist their jaws who break.
      <br><b>Exp:</b> The mean will not (even) shake off (what sticks to) their hands (soon after a meal) to any but those who would break their jaws with their clenched fists.
      ", "Thirukkural"),
      __(" 1078.
      The good to those will profit yield fair words who use;
      The base, like sugar-cane, will profit those who bruise.
      <br><b>Exp:</b> The great bestow (their alms) as soon as they are informed; (but) the mean, like the sugar-cane, only when they are tortured to death.
      ", "Thirukkural"),
      __(" 1079.
      If neighbours clothed and fed he see, the base
      Is mighty man some hidden fault to trace?
      <br><b>Exp:</b> The base will bring an evil (accusation) against others, as soon as he sees them (enjoying) good food and clothing.
      ", "Thirukkural"),
      __(" 1080.
      For what is base man fit, if griefs assail?
      Himself to offer, there and then, for sale!
      <br><b>Exp:</b> The base will hasten to sell themselves as soon as a calamity has befallen them. For what else are they fitted ?
      ", "Thirukkural"),

      // PART III. LOVE
      // 3.1 . The Pre-marital love
      // 3.1. 1 Mental Disturbance caused by the Beauty of the Princess

      __("1081.
      Goddess? or peafowl rare? She whose ears rich jewels wear,
      Is she a maid of human kind? All wildered is my mind!
      <br><b>Exp:</b> Is this jewelled female a celestial, a choice peahen, or a human being ? My mind is perplexed.
      ", "Thirukkural"),
      __("1082.
      She of the beaming eyes, To my rash look her glance replies,
      As if the matchless goddess' hand Led forth an armed band.
      <br><b>Exp:</b> This female beauty returning my looks is like a celestial maiden coming with an army to contend
      against me.
      ", "Thirukkural"),
      __("1083.
      Death's form I formerly Knew not; but now 'tis plain to me;
      He comes in lovely maiden's guise, With soul-subduing eyes.
      <br><b>Exp:</b> I never knew before what is called Yama; I see it now; it is the eyes that carry on a great fight with (the help of) female qualities.
      ", "Thirukkural"),
      __("1084.
      In sweet simplicity, A woman's gracious form hath she;
      But yet those eyes, that drink my life, Are with the form at strife!
      <br><b>Exp:</b> These eyes that seem to kill those who look at them are as it were in hostilities with this feminine simplicity.
      ", "Thirukkural"),
      __("1085.
      The light that on me gleams, Is it death's dart? or eye's bright beams?
      Or fawn's shy glance? All three appear In form of maiden here.
      <br><b>Exp:</b> Is it Yama, (a pair of) eyes or a hind ?- Are not all these three in the looks of this maid ?
      ", "Thirukkural"),
      __("1086.
      If cruel eye-brow's bow, Unbent, would veil those glances now;
      The shafts that wound this trembling heart Her eyes no more would dart.
      <br><b>Exp:</b> Her eyes will cause (me) no trembling sorrow, if they are properly hidden by her cruel arched eyebrows.
      ", "Thirukkural"),
      __("1087.
      As veil o'er angry eyes Of raging elephant that lies,
      The silken cincture's folds invest This maiden's panting breast.
      <br><b>Exp:</b> The cloth that covers the firm bosom of this maiden is (like) that which covers the eyes of a rutting elephant.
      ", "Thirukkural"),
      __("1088.
      Ah! woe is me! my might, That awed my foemen in the fight,
      By lustre of that beaming brow Borne down, lies broken now!
      <br><b>Exp:</b> On her bright brow alone is destroyed even that power of mine that used to terrify the most fearless foes in the battlefield.
      ", "Thirukkural"),
      __("1089.
      Like tender fawn's her eye; Clothed on is she with modesty;
      What added beauty can be lent; By alien ornament?
      <br><b>Exp:</b> Of what use are other jewels to her who is adorned with modesty, and the meek looks of a hind ?
      ", "Thirukkural"),
      __("1090.
      The palm-tree's fragrant wine, To those who taste yields joys divine;
      But love hath rare felicity For those that only see!
      <br><b>Exp:</b> Unlike boiled honey which yields delight only when it is drunk, love gives pleasure even when
      looked at.
      ", "Thirukkural"),

      // 3.1.2. Recognition of the Signs (of Mutual Love)

      __("1091.
      A double witchery have glances of her liquid eye;
      One glance is glance that brings me pain; the other heals again.
      <br><b>Exp:</b> There are two looks in the dyed eyes of this (fair one); one causes pain, and the other is the cure thereof.
      ", "Thirukkural"),
      __("1092.
      The furtive glance, that gleams one instant bright,
      Is more than half of love's supreme delight.
      <br><b>Exp:</b> A single stolen glance of her eyes is more than half the pleasure (of sexual embrace).
      ", "Thirukkural"),
      __("1093.
      She looked, and looking drooped her head:
      On springing shoot of love 'its water shed!
      <br><b>Exp:</b> She has looked (at men) and stooped (her head); and that (sign) waters as it were (the corn of) our love.
      ", "Thirukkural"),
      __("1094.
      I look on her: her eyes are on the ground the while:
      I look away: she looks on me with timid smile.
      <br><b>Exp:</b> When I look, she looks down; when I do not, she looks and smiles gently.
      ", "Thirukkural"),
      __("1095.
      She seemed to see me not; but yet the maid
      Her love, by smiling side-long glance, betrayed.
      <br><b>Exp:</b> She not only avoids a direct look at me, but looks as it were with a half-closed eye and smiles.
      ", "Thirukkural"),
      __("1096.
      Though with their lips affection they disown,
      Yet, when they hate us not, 'tis quickly known.
      <br><b>Exp:</b> Though they may speak harshly as if they were strangers, the words of the friendly are soon
      understood.
      ", "Thirukkural"),
      __("1097.
      The slighting words that anger feign, while eyes their love reveal.
      Are signs of those that love, but would their love conceal.
      <br><b>Exp:</b> Little words that are harsh and looks that are hateful are (but) the expressions of lovers who wish to act like strangers.
      ", "Thirukkural"),
      __("1098.
      I gaze, the tender maid relents the while;
      And, oh the matchless grace of that soft smile!
      <br><b>Exp:</b> When I look, the pitying maid looks in return and smiles gently; and that is a comforting sign for me.
      ", "Thirukkural"),
      __("1099.
      The look indifferent, that would its love disguise,
      Is only read aright by lovers' eyes.
      <br><b>Exp:</b> Both the lovers are capable of looking at each other in an ordinary way, as if they were perfect strangers.
      ", "Thirukkural"),
      __("1100.
      When eye to answering eye reveals the tale of love,
      All words that lips can say must useless prove.
      <br><b>Exp:</b> The words of the mouths are of no use whatever, when there is perfect agreement between the eyes (of lovers).
      ", "Thirukkural"),

      // 3.1.3. Rejoicing in the Embrace

      __("1101.
      All joys that senses five- sight, hearing, taste, smell, touch- can give,
      In this resplendent armlets-bearing damsel live!
      <br><b>Exp:</b> The (simultaneous) enjoyment of the five senses of sight, hearing, taste, smell and touch can only be found with bright braceleted (women).
      ", "Thirukkural"),
      __("1102.
      Disease and medicine antagonists we surely see;
      This maid, to pain she gives, herself is remedy.
      <br><b>Exp:</b> The remedy for a disease is always something different (from it); but for the disease caused by this jewelled maid, she is herself the cure.
      ", "Thirukkural"),
      __("1103.
      Than rest in her soft arms to whom the soul is giv'n,
      Is any sweeter joy in his, the Lotus-eyed-one's heaven?
      <br><b>Exp:</b> Can the lotus-eyed Vishnu's heaven be indeed as sweet to those who delight to sleep in the delicate arms of their beloved ?
      ", "Thirukkural"),
      __("1104.
      Withdraw, it burns; approach, it soothes the pain;
      Whence did the maid this wondrous fire obtain?
      <br><b>Exp:</b> From whence has she got this fire that burns when I withdraw and cools when I approach ?
      ", "Thirukkural"),
      __("1105.
      In her embrace, whose locks with flowery wreaths are bound,
      Each varied form of joy the soul can wish is found.
      <br><b>Exp:</b> The shoulders of her whose locks are adorned with flowers delight me as if they were the very
      sweets I have desired (to get).
      ", "Thirukkural"),
      __("1106.
      Ambrosia are the simple maiden's arms; when I attain
      Their touch, my withered life puts forth its buds again!
      <br><b>Exp:</b> The shoulders of this fair one are made of ambrosia, for they revive me with pleasure every time I embrace them.
      ", "Thirukkural"),
      __("1107.
      As when one eats from household store, with kindly grace
      Sharing his meal: such is this golden maid's embrace.
      <br><b>Exp:</b> The embraces of a gold-complexioned beautiful female are as pleasant as to dwell in one's own house and live by one's own (earnings) after distributing (a portion of it in charity).
      ", "Thirukkural"),
      __("1108.
      Sweet is the strict embrace of those whom fond affection binds,
      Where no dissevering breath of discord entrance finds.
      <br><b>Exp:</b> To ardent lovers sweet is the embrace that cannot be penetrated even by a breath of breeze.
      ", "Thirukkural"),
      __("1109.
      The jealous variance, the healing of the strife, reunion gained:
      These are the fruits from wedded love obtained.
      <br><b>Exp:</b> Love quarrel, reconciliation and intercourse - these are the advantages reaped by those who marry for lust.
      ", "Thirukkural"),
      __("1110.
      The more men learn, the more their lack of learning they detect;
      'Tis so when I approach the maid with gleaming jewels decked.
      <br><b>Exp:</b> As (one's) ignorance is discovered the more one learns, so does repeated intercourse with a welladorned female (only create a desire for more).
      ", "Thirukkural"),

      // 3.1.4. The Praise of her Beauty

      __("1111.
      O flower of the sensitive plant! than thee
      More tender's the maiden beloved by me.
      <br><b>Exp:</b> May you flourish, O Anicham! you have a delicate nature. But my beloved is more delicate than you.
      ", "Thirukkural"),
      __("1112.
      You deemed, as you saw the flowers, her eyes were as flowers, my soul,
      That many may see; it was surely some folly that over you stole!
      <br><b>Exp:</b> O my soul, fancying that flowers which are seen by many can resemble her eyes, you become
      confused at the sight of them.
      ", "Thirukkural"),
      __("1113.
      As tender shoot her frame; teeth, pearls; around her odours blend;
      Darts are the eyes of her whose shoulders like the bambu bend.
      <br><b>Exp:</b> The complexion of this bamboo-shouldered one is that of a shoot; her teeth, are pearls; her breath, fragrance; and her dyed eyes, lances.
      ", "Thirukkural"),
      __("1114.
      The lotus, seeing her, with head demiss, the ground would eye,
      And say, 'With eyes of her, rich gems who wears, we cannot vie.'
      <br><b>Exp:</b> If the blue lotus could see, it would stoop and look at the ground saying, \"I can never resemble the eyes of this excellent jewelled one.\"
      ", "Thirukkural"),
      __("1115.
      The flowers of the sensitive plant as a girdle around her she placed;
      The stems she forgot to nip off; they 'll weigh down the delicate waist.
      <br><b>Exp:</b> No merry drums will be beaten for the (tender) waist of her who has adorned herself with the
      anicham without having removed its stem.
      ", "Thirukkural"),
      __("1116.
      The stars perplexed are rushing wildly from their spheres;
      For like another moon this maiden's face appears.
      <br><b>Exp:</b> The stars have become confused in their places not being able to distinguish between the moon and the maid's countenance.
      ", "Thirukkural"),
      __("1117.
      In moon, that waxing waning shines, as sports appear,
      Are any spots discerned in face of maiden here?
      <br><b>Exp:</b> Could there be spots in the face of this maid like those in the bright full moon ?
      ", "Thirukkural"),
      __("1118.
      Farewell, O moon! If that thine orb could shine
      Bright as her face, thou shouldst be love of mine.
      <br><b>Exp:</b> If you can indeed shine like the face of women, flourish, O moon, for then would you be worth loving ?
      ", "Thirukkural"),
      __("1119.
      If as her face, whose eyes are flowers, thou wouldst have charms for me,
      Shine for my eyes alone, O moon, shine not for all to see!
      <br><b>Exp:</b> O moon, if you wish to resemble the face of her whose eyes are like (these) flowers, do not appear so as to be seen by all.
      ", "Thirukkural"),
      __("1120.
      The flower of the sensitive plant, and the down on the swan's white breast,
      As the thorn are harsh, by the delicate feet of this maiden pressed.
      <br><b>Exp:</b> The anicham and the feathers of the swan are to the feet of females, like the fruit of the (thorny) Nerunji.
      ", "Thirukkural"),

      // 3.1.5. Declaration of Love's special Excellence

      __("1121.
      The dew on her white teeth, whose voice is soft and low,
      Is as when milk and honey mingled flow.
      <br><b>Exp:</b> The water which oozes from the white teeth of this soft speeched damsel is like a mixture of milk and honey.
      ", "Thirukkural"),
      __("1122.
      Between this maid and me the friendship kind
      Is as the bonds that soul and body bind.
      <br><b>Exp:</b> The love between me and this damsel is like the union of body and soul.
      ", "Thirukkural"),
      __("1123.
      For her with beauteous brow, the maid I love, there place is none;
      To give her image room, O pupil of mine eye, begone!
      <br><b>Exp:</b> O you image in the pupil (of my eye)! depart; there is no room for (my) fair-browed beloved.
      ", "Thirukkural"),
      __("1124.
      Life is she to my very soul when she draws nigh;
      Dissevered from the maid with jewels rare, I die!
      <br><b>Exp:</b> My fair-jewelled one resembles the living soul (when she is in union with me), the dying soul when she leaves me.
      ", "Thirukkural"),
      __("1125.
      I might recall, if I could once forget; but from my heart
      Her charms fade not, whose eyes gleam like the warrior's dart.
      <br><b>Exp:</b> If I had forgotten her who has bright battling eyes, I would have remembered (thee); but I never forget her. (Thus says he to her maid).
      ", "Thirukkural"),
      __("1126.
      My loved one's subtle form departs not from my eyes;
      I wink them not, lest I should pain him where he lies.
      <br><b>Exp:</b> My lover would not depart from mine eyes; even if I wink, he would not suffer (from pain); he is so ethereal.
      ", "Thirukkural"),
      __("1127.
      My love doth ever in my eyes reside;
      I stain them not, fearing his form to hide.
      <br><b>Exp:</b> As my lover abides in my eyes, I will not even paint them, for he would (then) have to conceal himself.
      ", "Thirukkural"),
      __("1128.
      Within my heart my lover dwells; from food I turn
      That smacks of heat, lest he should feel it burn.
      <br><b>Exp:</b> As my lover is in my heart, I am afraid of eating (anything) hot, for I know it would pain him.
      ", "Thirukkural"),
      __("1129.
      I fear his form to hide, nor close my eyes:
      'Her love estranged is gone!' the village cries.
      <br><b>Exp:</b> I will not wink, knowing that if I did, my lover would hide himself; and for this reason, this town says, he is unloving.
      ", "Thirukkural"),
      __("1130.
      Rejoicing in my very soul he ever lies;
      'Her love estranged is gone far off!' the village cries.
      <br><b>Exp:</b> My lover dwells in my heart with perpetual delight; but the town says he is unloving and (therefore)
      dwells afar.
      ", "Thirukkural"),

        // 3.1.6. The Abandonment of Reserve

      __("1131.
      To those who 've proved love's joy, and now afflicted mourn,
      Except the helpful 'horse of palm', no other strength remains.
      <br><b>Exp:</b> To those who after enjoyment of sexual pleasure suffer (for want of more), there is no help so efficient as the palmyra horse.
      ", "Thirukkural"),
      __("1132.
      My body and my soul, that can no more endure,
      Will lay reserve aside, and mount the 'horse of palm'.
      <br><b>Exp:</b> Having got rid of shame, the suffering body and soul save themselves on the palmyra horse.
      ", "Thirukkural"),
      __("1133.
      I once retained reserve and seemly manliness;
      To-day I nought possess but lovers' 'horse of palm'.
      <br><b>Exp:</b> Modesty and manliness were once my own; now, my own is the palmyra horse that is ridden by the
      lustful.
      ", "Thirukkural"),
      __("1134.
      Love's rushing tide will sweep away the raft
      Of seemly manliness and shame combined.
      <br><b>Exp:</b> The raft of modesty and manliness, is, alas, carried-off by the strong current of lust.
      ", "Thirukkural"),
      __("1135.
      The maid that slender armlets wears, like flowers entwined,
      Has brought me 'horse of palm,' and pangs of eventide!
      <br><b>Exp:</b> She with the small garland-like bracelets has given me the palmyra horse and the sorrow that is
      endured at night.
      ", "Thirukkural"),
      __("1136.
      Of climbing 'horse of palm' in midnight hour, I think;
      My eyes know no repose for that same simple maid.
      <br><b>Exp:</b> Mine eyes will not close in sleep on your mistress's account; even at midnight will I think of mounting the palmyra horse.
      ", "Thirukkural"),
      __("1137.
      There's nought of greater worth than woman's long-enduring soul,
      Who, vexed by love like ocean waves, climbs not the 'horse of palm'.
      <br><b>Exp:</b> There is nothing so noble as the womanly nature that would not ride the palmyra horse, though
      plunged a sea of lust.
      ", "Thirukkural"),
      __("1138.
      In virtue hard to move, yet very tender, too, are we;
      Love deems not so, would rend the veil, and court publicity!
      <br><b>Exp:</b> Even the Lust (of women) transgresses its secrecy and appears in public, forgetting that they are too chaste and liberal (to be overcome by it).
      ", "Thirukkural"),
      __("1139.
      'There's no one knows my heart,' so says my love,
      And thus, in public ways, perturbed will rove.
      <br><b>Exp:</b> My lust, feeling that it is not known by all, reels confused in the streets (of this town).
      ", "Thirukkural"),
      __("1140.
      Before my eyes the foolish make a mock of me,
      Because they ne'er endured the pangs I now must drie.
      <br><b>Exp:</b> Even strangers laugh (at us) so as to be seen by us, for they have not suffered.
      ", "Thirukkural"),

      // 3.1.7. The Announcement of the Rumour

      __("1141.
      By this same rumour's rise, my precious life stands fast;
      Good fortune grant the many know this not!
      <br><b>Exp:</b> My precious life is saved by the raise of rumour, and this, to my good luck no others are aware of.
      ", "Thirukkural"),
      __("1142.
      The village hath to us this rumour giv'n, that makes her mine;
      Unweeting all the rareness of the maid with flower-like eyne.
      <br><b>Exp:</b> Not knowing the value of her whose eyes are like flowers this town has got up a rumour about me.
      ", "Thirukkural"),
      __("1143.
      The rumour spread within the town, is it not gain to me?
      It is as though that were obtained that may not be.
      <br><b>Exp:</b> Will I not get a rumour that is known to the (whole) town ? For what I have not got is as if I had got it (already).
      ", "Thirukkural"),
      __("1144.
      The rumour rising makes my love to rise;
      My love would lose its power and languish otherwise.
      <br><b>Exp:</b> Rumour increases the violence of my passion; without it it would grow weak and waste away.
      ", "Thirukkural"),
      __("1145.
      The more man drinks, the more he ever drunk would be;
      The more my love's revealed, the sweeter 'tis to me!
      <br><b>Exp:</b> As drinking liquor is delightful (to one) whenever one is in mirth, so is lust delightful to me whenever it is the subject of rumour.
      ", "Thirukkural"),
      __("1146.
      I saw him but one single day: rumour spreads soon
      As darkness, when the dragon seizes on the moon.
      <br><b>Exp:</b> It was but a single day that I looked on (my lover); but the rumour thereof has spread like the seizure of the moon by the serpent.
      ", "Thirukkural"),
      __("1147.
      My anguish grows apace: the town's report
      Manures it; my mother's word doth water it.
      <br><b>Exp:</b> This malady (of lust) is manured by the talk of women and watered by the (harsh) words of my
      mother.
      ", "Thirukkural"),
      __("1148.
      With butter-oil extinguish fire! 'Twill prove
      Harder by scandal to extinguish love.
      <br><b>Exp:</b> To say that one could extinguish passion by rumour is like extinguishing fire with ghee.
      ", "Thirukkural"),
      __("1149.
      When he who said 'Fear not!' hath left me blamed,
      While many shrink, can I from rumour hide ashamed?
      <br><b>Exp:</b> When the departure of him who said \"fear not\" has put me to shame before others, why need I be ashamed of scandal.
      ", "Thirukkural"),
      __("1150.
      If we desire, who loves will grant what we require;
      This town sends forth the rumour we desire!
      <br><b>Exp:</b> The rumour I desire is raised by the town (itself); and my lover would if desired consent (to my following him).
      ", "Thirukkural"),

      // 3.2 The Post-marital love
      // 3.2.1. Separation unendurable

      __("1151.
      If you will say, 'I leave thee not,' then tell me so;
      Of quick return tell those that can survive this woe.
      <br><b>Exp:</b> If it is not departure, tell me; but if it is your speedy return, tell it to those who would be alive then.
      ", "Thirukkural"),
      __("1152.
      It once was perfect joy to look upon his face;
      But now the fear of parting saddens each embrace.
      <br><b>Exp:</b> His very look was once pleasing; but (now) even intercourse is painful through fear of separation.
      ", "Thirukkural"),
      __("1153.
      To trust henceforth is hard, if ever he depart,
      E'en he, who knows his promise and my breaking heart.
      <br><b>Exp:</b> As even the lover who understands (everything) may at times depart, confidence is hardly possible.
      ", "Thirukkural"),
      __("1154.
      If he depart, who fondly said, 'Fear not,' what blame's incurred
      By those who trusted to his reassuring word?
      <br><b>Exp:</b> If he who bestowed his love and said \"fear not\" should depart, will it be the fault of those who believed in (his) assuring words ?
      ", "Thirukkural"),
      __("1155.
      If you would guard my life, from going him restrain
      Who fills my life! If he depart, hardly we meet again.
      <br><b>Exp:</b> If you would save (my life), delay the departure of my destined (husband); for if he departs,
      intercourse will become impossible.
      ", "Thirukkural"),
      __("1156.
      To cherish longing hope that he should ever gracious be,
      Is hard, when he could stand, and of departure speak to me.
      <br><b>Exp:</b> If he is so cruel as to mention his departure (to me), the hope that he would bestow (his love) must be given up.
      ", "Thirukkural"),
      __("1157.
      The bracelet slipping from my wrist announced before
      Departure of the Prince that rules the ocean shore.
      <br><b>Exp:</b> Do not the rings that begin to slide down my fingers forebode the separation of my lord ?
      ", "Thirukkural"),
      __("1158.
      'Tis sad to sojourn in the town where no kind kinsmen dwell;
      'Tis sadder still to bid a friend beloved farewell.
      <br><b>Exp:</b> Painful is it to live in a friendless town; but far more painful is it to part from one's lover.
      ", "Thirukkural"),
      __("1159.
      Fire burns the hands that touch; but smart of love
      Will burn in hearts that far away remove.
      <br><b>Exp:</b> Fire burns when touched; but, like the sickness of love, can it also burn when removed ?
      ", "Thirukkural"),
      __("1160.
      Sorrow's sadness meek sustaining, Driving sore distress away,
      Separation uncomplaining Many bear the livelong day!
      <br><b>Exp:</b> As if there were many indeed that can consent to the impossible, kill their pain, endure separation and yet continue to live afterwards.
      ", "Thirukkural"),

      // 3.2.2. Complainings

      __("1161.
      I would my pain conceal, but see! it surging swells,
      As streams to those that draw from ever-springing wells.
      <br><b>Exp:</b> I would hide this pain from others; but it (only) swells like a spring to those who drain it.
      ", "Thirukkural"),
      __("1162.
      I cannot hide this pain of mine, yet shame restrains
      When I would tell it out to him who caused my pains.
      <br><b>Exp:</b> I cannot conceal this pain, nor can I relate it without shame to him who has caused it.
      ", "Thirukkural"),
      __("1163.
      My soul, like porter's pole, within my wearied frame,
      Sustains a two-fold burthen poised, of love and shame.
      <br><b>Exp:</b> (Both) lust and shame, with my soul for their shoulder pole balance themselves on a body that cannot bear them.
      ", "Thirukkural"),
      __("1164.
      A sea of love, 'tis true, I see stretched out before,
      But not the trusty bark that wafts to yonder shore.
      <br><b>Exp:</b> There is indeed a flood of lust; but there is no raft of safety to cross it with.
      ", "Thirukkural"),
      __("1165.
      Who work us woe in friendship's trustful hour,
      What will they prove when angry tempests lower?
      <br><b>Exp:</b> He who can produce sorrow from friendship, what can he not bring forth out of enmity ?
      ", "Thirukkural"),
      __("1166.
      A happy love 's sea of joy; but mightier sorrows roll
      From unpropitious love athwart the troubled soul.
      <br><b>Exp:</b> The pleasure of lust is (as great as) the sea; but the pain of lust is far greater.
      ", "Thirukkural"),
      __("1167.
      I swim the cruel tide of love, and can no shore descry,
      In watches of the night, too, 'mid the waters, only I!
      <br><b>Exp:</b> I have swam across the terrible flood of lust, but have not seen its shore; even at midnight I am alone; still I live.
      ", "Thirukkural"),
      __("1168.
      All living souls in slumber soft she steeps;
      But me alone kind night for her companing keeps!
      <br><b>Exp:</b> The night which graciously lulls to sleep all living creatures, has me alone for her companion.
      ", "Thirukkural"),
      __("1169.
      More cruel than the cruelty of him, the cruel one,
      In these sad times are lengthening hours of night I watch alone.
      <br><b>Exp:</b> The long nights of these days are far more cruel than the heartless one who is torturing me.
      ", "Thirukkural"),
      __("1170.
      When eye of mine would as my soul go forth to him,
      It knows not how through floods of its own tears to swim.
      <br><b>Exp:</b> Could mine eyes travel like my thoughts to the abode (of my absent lord), they would not swim in this flood of tears.
      ", "Thirukkural"),

      // 3.2.3. Eyes consumed with Grief

      __("1171.
      They showed me him, and then my endless pain
      I saw: why then should weeping eyes complain?
      <br><b>Exp:</b> As this incurable malady has been caused by my eyes which showed (him) to me, why should they
      now weep for (him).
      ", "Thirukkural"),
      __("1172.
      How glancing eyes, that rash unweeting looked that day,
      With sorrow measureless are wasting now away!
      <br><b>Exp:</b> The dyed eyes that (then) looked without foresight, why should they now endure sorrow, without
      feeling sharply (their own fault).
      ", "Thirukkural"),
      __("1173.
      The eyes that threw such eager glances round erewhile
      Are weeping now. Such folly surely claims a smile!
      <br><b>Exp:</b> They themselves looked eagerly (on him) and now they weep. Is not this to be laughed at ?
      ", "Thirukkural"),
      __("1174.
      Those eyes have wept till all the fount of tears is dry,
      That brought upon me pain that knows no remedy.
      <br><b>Exp:</b> These painted eyes have caused me a lasting mortal disease; and now they can weep no more, the
      tears having dried up.
      ", "Thirukkural"),
      __("1175.
      The eye that wrought me more than sea could hold of woes,
      Is suffering pangs that banish all repose.
      <br><b>Exp:</b> Mine eyes have caused me a lust that is greater than the sea and (they themselves) endure the torture of sleeplessness.
      ", "Thirukkural"),
      __("1176.
      Oho! how sweet a thing to see! the eye
      That wrought this pain, in the same gulf doth lie.
      <br><b>Exp:</b> The eyes that have given me this disease have themselves been seized with this (suffering). Oh! I am much delighted.
      ", "Thirukkural"),
      __("1177.
      Aching, aching, let those exhaust their stream,
      That melting, melting, that day gazed on him.
      <br><b>Exp:</b> The eyes that became tender and gazed intently on him, may they suffer so much as to dry up the
      fountain of their tears.
      ", "Thirukkural"),
      __("1178.
      Who loved me once, onloving now doth here remain;
      Not seeing him, my eye no rest can gain.
      <br><b>Exp:</b> He is indeed here who loved me with his lips but not with his heart but mine eyes suffer from not seeing him.
      ", "Thirukkural"),
      __("1179.
      When he comes not, all slumber flies; no sleep when he is there;
      Thus every way my eyes have troubles hard to bear.
      <br><b>Exp:</b> When he is away they do not sleep; when he is present they do not sleep; in either case, mine eyes endure unbearable agony.
      ", "Thirukkural"),
      __("1180.
      It is not hard for all the town the knowledge to obtain,
      When eyes, as mine, like beaten tambours, make the mystery plain.
      <br><b>Exp:</b> It is not difficult for the people of this place to understand the secret of those whose eyes, like mine, are as it were beaten drums.
      ", "Thirukkural"),

      // 3.2.4. The Pallid Hue

      __("1181.
      I willed my lover absent should remain;
      Of pining's sickly hue to whom shall I complain?
      <br><b>Exp:</b> I who (then) consented to the absence of my loving lord, to whom can I (now) relate the fact of my having turned sallow.
      ", "Thirukkural"),
      __("1182.
      'He gave': this sickly hue thus proudly speaks,
      Then climbs, and all my frame its chariot makes.
      <br><b>Exp:</b> Sallowness, as if proud of having been caused by him, would now ride on my person.
      ", "Thirukkural"),
      __("1183.
      Of comeliness and shame he me bereft,
      While pain and sickly hue, in recompense, he left.
      <br><b>Exp:</b> He has taken (away) my beauty and modesty, and given me instead disease and sallowness.
      ", "Thirukkural"),
      __("1184.
      I meditate his words, his worth is theme of all I say,
      This sickly hue is false that would my trust betray.
      <br><b>Exp:</b> I think (of him); and what I speak about is but his excellence; still is there sallowness; and this is deceitful.
      ", "Thirukkural"),
      __("1185.
      My lover there went forth to roam;
      This pallor of my frame usurps his place at home.
      <br><b>Exp:</b> Just as my lover departed then, did not sallowness spread here on my person ?
      ", "Thirukkural"),
      __("1186.
      As darkness waits till lamp expires, to fill the place,
      This pallor waits till I enjoy no more my lord's embrace.
      <br><b>Exp:</b> Just as darkness waits for the failing light; so does sallowness wait for the laxity of my husband's intercourse.
      ", "Thirukkural"),
      __("1187.
      I lay in his embrace, I turned unwittingly;
      Forthwith this hue, as you might grasp it, came on me.
      <br><b>Exp:</b> I who was in close embrace just turned aside and the moment I did so, sallowness came on me like something to be seized on.
      ", "Thirukkural"),
      __("1188.
      On me, because I pine, they cast a slur;
      But no one says, 'He first deserted her.'
      <br><b>Exp:</b> Besides those who say \"she has turned sallow\" there are none who say \"he has forsaken her\".
      ", "Thirukkural"),
      __("1189.
      Well! let my frame, as now, be sicklied o'er with pain,
      If he who won my heart's consent, in good estate remain!
      <br><b>Exp:</b> If he is clear of guilt who has conciliated me (to his departure) let my body suffer its due and turn sallow.
      ", "Thirukkural"),
      __("1190.
      'Tis well, though men deride me for my sickly hue of pain;
      If they from calling him unkind, who won my love, refrain.
      <br><b>Exp:</b> It would be good to be said of me that I have turned sallow, if friends do not reproach with unkindness him who pleased me (then).
      ", "Thirukkural"),

      // 3.2.5. The Solitary Anguish

      __("1191.
      The bliss to be beloved by those they love who gains,
      Of love the stoneless, luscious fruit obtains.
      <br><b>Exp:</b> The women who are beloved by those whom they love, have they have not got the stone-less fruit of sexual delight ?
      ", "Thirukkural"),
      __("1192.
      As heaven on living men showers blessings from above,
      Is tender grace by lovers shown to those they love.
      <br><b>Exp:</b> The bestowal of love by the beloved on those who love them is like the rain raining (at the proper season) on those who live by it.
      ", "Thirukkural"),
      __("1193.
      Who love and are beloved to them alone
      Belongs the boast, 'We've made life's very joys our own.'
      <br><b>Exp:</b> The pride that says \"we shall live\" suits only those who are loved by their beloved (husbands). ", "Thirukkural"),
      __("1194.
      Those well-beloved will luckless prove,
      Unless beloved by those they love.
      <br><b>Exp:</b> Even those who are esteemed (by other women) are devoid of excellence, if they are not loved by
      their beloved.
      ", "Thirukkural"),
      __("1195.
      From him I love to me what gain can be,
      Unless, as I love him, he loveth me?
      <br><b>Exp:</b> He who is beloved by me, what will he do to me, if I am not beloved by him ?
      ", "Thirukkural"),
      __("1196.
      Love on one side is bad; like balanced load
      By porter borne, love on both sides is good.
      <br><b>Exp:</b> Lust, like the weight of the KAVADI, pains if it lies in one end only but pleases if it is in both.
      ", "Thirukkural"),
      __("1197.
      While Kaman rushes straight at me alone,
      Is all my pain and wasting grief unknown?
      <br><b>Exp:</b> Would not cupid who abides and contends in one party (only) witness the pain and sorrow (in that party)?
      ", "Thirukkural"),
      __("1198.
      Who hear from lover's lips no pleasant word from day to day,
      Yet in the world live out their life,- no braver souls than they!
      <br><b>Exp:</b> There is no one in the world so hard-hearted as those who can live without receiving (even) a kind word from their beloved.
      ", "Thirukkural"),
      __("1199.
      Though he my heart desires no grace accords to me,
      Yet every accent of his voice is melody.
      <br><b>Exp:</b> Though my beloved bestows no love on one, still are his words sweet to my ears.
      ", "Thirukkural"),
      __("1200.
      Tell him thy pain that loves not thee?
      Farewell, my soul, fill up the sea!
      <br><b>Exp:</b> Live, O my soul, would you who relate your great sorrow to strangers, try rather to fill up your own sea (of sorrow).
      ", "Thirukkural"),

      // 3.2.6. Sad Memories

      __("1201.
      From thought of her unfailing gladness springs,
      Sweeter than palm-rice wine the joy love brings.
      <br><b>Exp:</b> Sexuality is sweeter than liquor, because when remembered, it creates a most rapturous delight.
      ", "Thirukkural"),
      __("1202.
      How great is love! Behold its sweetness past belief!
      Think on the lover, and the spirit knows no grief.
      <br><b>Exp:</b> Even to think of one's beloved gives one no pain. Sexuality, in any degree, is always delightful.
      ", "Thirukkural"),
      __("1203.
      A fit of sneezing threatened, but it passed away;
      He seemed to think of me, but do his fancies stray?
      <br><b>Exp:</b> I feel as if I am going to sneeze but do not, and (therefore) my beloved is about to think (of me) but does not.
      ", "Thirukkural"),
      __("1204.
      Have I a place within his heart!
      From mine, alas! he never doth depart.
      <br><b>Exp:</b> He continues to abide in my soul, do I likewise abide in his ?
      ", "Thirukkural"),
      __("1205.
      Me from his heart he jealously excludes:
      Hath he no shame who ceaseless on my heart intrudes?
      <br><b>Exp:</b> He who has imprisoned me in his soul, is he ashamed to enter incessantly into mine.
      ", "Thirukkural"),
      __("1206.
      How live I yet? I live to ponder o'er
      The days of bliss with him that are no more.
      <br><b>Exp:</b> I live by remembering my (former) intercourse with him; if it were not so, how could I live ?
      ", "Thirukkural"),
      __("1207.
      If I remembered not what were I then? And yet,
      The fiery smart of what my spirit knows not to forget!
      <br><b>Exp:</b> I have never forgotten (the pleasure); even to think of it burns my soul; could I live, if I should ever forget it ?
      ", "Thirukkural"),
      __("1208.
      My frequent thought no wrath excites. It is not so?
      This honour doth my love on me bestow.
      <br><b>Exp:</b> He will not be angry however much I may think of him; is it not so much the delight my beloved
      affords me ?
      ", "Thirukkural"),
      __("1209.
      Dear life departs, when his ungracious deeds I ponder o'er,
      Who said erewhile, 'We're one for evermore'.
      <br><b>Exp:</b> My precious life is wasting away by thinking too much on the cruelty of him who said we were not different.
      ", "Thirukkural"),
      __("1210.
      Set not; so may'st thou prosper, moon! that eyes may see
      My love who went away, but ever bides with me.
      <br><b>Exp:</b> May you live, O Moon! Do not set, that I mine see him who has departed without quitting my soul.
      ", "Thirukkural"),

      // 3.2.7. The Visions of the Night

      __("1211.
      It came and brought to me, that nightly vision rare,
      A message from my love,- what feast shall I prepare?
      <br><b>Exp:</b> Where with shall I feast the dream which has brought me my dear one's messenger ?
      ", "Thirukkural"),
      __("1212.
      If my dark, carp-like eye will close in sleep, as I implore,
      The tale of my long-suffering life I'll tell my loved one o'er.
      <br><b>Exp:</b> If my fish-like painted eyes should, at my begging, close in sleep, I could fully relate my sufferings to my lord.
      ", "Thirukkural"),
      __("1213.
      Him, who in waking hour no kindness shows,
      In dreams I see; and so my lifetime goes!
      <br><b>Exp:</b> My life lasts because in my dream I behold him who does not favour me in my waking hours.
      ", "Thirukkural"),
      __("1214.
      Some pleasure I enjoy when him who loves not me
      In waking hours, the vision searches out and makes me see.
      <br><b>Exp:</b> There is pleasure in my dream, because in it I seek and obtain him who does not visit me in my
      wakefulness.
      ", "Thirukkural"),
      __("1215.
      As what I then beheld in waking hour was sweet,
      So pleasant dreams in hour of sleep my spirit greet.
      <br><b>Exp:</b> I saw him in my waking hours, and then it was pleasant; I see him just now in my dream, and it is (equally) pleasant.
      ", "Thirukkural"),
      __("1216.
      And if there were no waking hour, my love
      In dreams would never from my side remove.
      <br><b>Exp:</b> Were there no such thing as wakefulness, my beloved (who visited me) in my dream would not
      depart from me.
      ", "Thirukkural"),
      __("1217.
      The cruel one, in waking hour, who all ungracious seems,
      Why should he thus torment my soul in nightly dreams?
      <br><b>Exp:</b> The cruel one who would not favour me in my wakefulness, what right has he to torture me in my
      dreams?
      ", "Thirukkural"),
      __("1218.
      And when I sleep he holds my form embraced;
      And when I wake to fill my heart makes haste!
      <br><b>Exp:</b> When I am asleep he rests on my shoulders, (but) when I awake he hastens into my soul.
      ", "Thirukkural"),
      __("1219.
      In dreams who ne'er their lover's form perceive,
      For those in waking hours who show no love will grieve.
      <br><b>Exp:</b> They who have no dear ones to behold in their dreams blame him who visits me not in my waking
      hours.
      ", "Thirukkural"),
      __("1220.
      They say, that he in waking hours has left me lone;
      In dreams they surely see him not,- these people of the town;
      <br><b>Exp:</b> The women of this place say he has forsaken me in my wakefulness. I think they have not seen him visit me in my dreams.
      ", "Thirukkural"),

      // 3.2.8. Lamentations at Eventide

      __("1221.
      Thou art not evening, but a spear that doth devour
      The souls of brides; farewell, thou evening hour!
      <br><b>Exp:</b> Live, O you evening are you (the former) evening? No, you are the season that slays (married)
      women.
      ", "Thirukkural"),
      __("1222.
      Thine eye is sad; Hail, doubtful hour of eventide!
      Of cruel eye, as is my spouse, is too thy bride?
      <br><b>Exp:</b> A long life to you, O dark evening! You are sightless. Is your help-mate (also) as hard-hearted as mine.
      ", "Thirukkural"),
      __("1223.
      With buds of chilly dew wan evening's shade enclose;
      My anguish buds space and all my sorrow grows.
      <br><b>Exp:</b> The evening that (once) came in with trembling and dimness (now) brings me an aversion for life and increasing sorrow.
      ", "Thirukkural"),
      __("1224.
      When absent is my love, the evening hour descends,
      As when an alien host to field of battle wends.
      <br><b>Exp:</b> In the absence of my lover, evening comes in like slayers on the field of slaughter.
      ", "Thirukkural"),
      __("1225.
      O morn, how have I won thy grace? thou bring'st relief
      O eve, why art thou foe! thou dost renew my grief.
      <br><b>Exp:</b> What good have I done to morning (and) what evil to evening?
      ", "Thirukkural"),
      __("1226.
      The pangs that evening brings I never knew,
      Till he, my wedded spouse, from me withdrew.
      <br><b>Exp:</b> Previous to my husband's departure, I know not the painful nature of evening.
      ", "Thirukkural"),
      __("1227.
      My grief at morn a bud, all day an opening flower,
      Full-blown expands in evening hour.
      <br><b>Exp:</b> This malady buds forth in the morning, expands all day long and blossoms in the evening.
      ", "Thirukkural"),
      __("1228.
      The shepherd's pipe is like a murderous weapon, to my ear,
      For it proclaims the hour of ev'ning's fiery anguish near.
      <br><b>Exp:</b> The shepherd's flute now sounds as a fiery forerunner of night, and is become a weapon that slays (me).
      ", "Thirukkural"),
      __("1229.
      If evening's shades, that darken all my soul, extend;
      From this afflicted town will would of grief ascend.
      <br><b>Exp:</b> When night comes on confusing (everyone's) mind, the (whole) town will lose its sense and be
      plunged in sorrow.
      ", "Thirukkural"),
      __("1230.
      This darkening eve, my darkling soul must perish utterly;
      Remembering him who seeks for wealth, but seeks not me.
      <br><b>Exp:</b> My (hitherto) unextinguished life is now lost in this bewildering night at the thought of him who has the nature of wealth.
      ", "Thirukkural"),

      // 3.2.9. Wasting Away

      __("1231.
      Thine eyes grown dim are now ashamed the fragrant flow'rs to see,
      Thinking on him, who wand'ring far, leaves us in misery.
      <br><b>Exp:</b> While we endure the unbearable sorrow, your eyes weep for him who is gone afar, and shun (the
      sight of) fragrant flowers.
      ", "Thirukkural"),
      __("1232.
      The eye, with sorrow wan, all wet with dew of tears,
      As witness of the lover's lack of love appears.
      <br><b>Exp:</b> The discoloured eyes that shed tears profusely seem to betray the unkindness of our beloved.
      ", "Thirukkural"),
      __("1233.
      These withered arms, desertion's pangs abundantly display,
      That swelled with joy on that glad nuptial day.
      <br><b>Exp:</b> The shoulders that swelled on the day of our union (now) seem to announce our separation clearly (to the public).
      ", "Thirukkural"),
      __("1234.
      When lover went, then faded all their wonted charms,
      And armlets' golden round slips off from these poor wasted arms.
      <br><b>Exp:</b> In the absence of your consort, your shoulders having lost their former beauty and fulness, your bracelets of pure gold have become loose.
      ", "Thirukkural"),
      __("1235.
      These wasted arms, the bracelet with their wonted beauty gone,
      The cruelty declare of that most cruel one.
      <br><b>Exp:</b> The (loosened) bracelets, and the shoulders from which the old beauty has faded, relate the cruelty of the pitiless one.
      ", "Thirukkural"),
      __("1236.
      I grieve, 'tis pain to me to hear him cruel chid,
      Because the armlet from my wasted arm has slid.
      <br><b>Exp:</b> I am greatly pained to hear you call him a cruel man, just because your shoulders are reduced and your bracelets loosened.
      ", "Thirukkural"),
      __("1237.
      My heart! say ought of glory wilt thou gain,
      If to that cruel one thou of thy wasted arms complain?
      <br><b>Exp:</b> Can you O my soul! gain glory by relating to the (so-called) cruel one the clamour of my fading
      shoulders?
      ", "Thirukkural"),
      __("1238.
      One day the fervent pressure of embracing arms I checked,
      Grew wan the forehead of the maid with golden armlet decked.
      <br><b>Exp:</b> When I once loosened the arms that were in embrace, the forehead of the gold-braceleted women
      turned sallow.
      ", "Thirukkural"),
      __("1239.
      As we embraced a breath of wind found entrance there;
      The maid's large liquid eyes were dimmed with care.
      <br><b>Exp:</b> When but a breath of breeze penetrated our embrace, her large cool eyes became sallow.
      ", "Thirukkural"),
      __("1240.
      The dimness of her eye felt sorrow now,
      Beholding what was done by that bright brow.
      <br><b>Exp:</b> Was it at the sight of what the bright forehead had done that the sallowness of her eyes became sad?
      ", "Thirukkural"),

      // 3.2.10. Soliloquy

      __("1241.
      My heart, canst thou not thinking of some med'cine tell,
      Not any one, to drive away this grief incurable?
      <br><b>Exp:</b> O my soul, will you not think and tell me some medicine be it what it may, that can cure this incurable malady?
      ", "Thirukkural"),
      __("1242.
      Since he loves not, thy smart
      Is folly, fare thee well my heart!
      <br><b>Exp:</b> May you live, O my soul! While he is without love, for you to suffer is (simple) folly.
      ", "Thirukkural"),
      __("1243.
      What comes of sitting here in pining thought, O heart? He knows
      No pitying thought, the cause of all these wasting woes.
      <br><b>Exp:</b> O my soul! why remain (here) and suffer thinking (of him)? There are no lewd thoughts (of you) in him who has caused you this disease of sorrow.
      ", "Thirukkural"),
      __("1244.
      O rid me of these eyes, my heart; for they,
      Longing to see him, wear my life away.
      <br><b>Exp:</b> O my soul! take my eyes also with you, (if not), these would eat me up (in their desire) to see him.
      ", "Thirukkural"),
      __("1245.
      O heart, as a foe, can I abandon utterly
      Him who, though I long for him, longs not for me?
      <br><b>Exp:</b> O my soul! can he who loves not though he is beloved, be forsaken saying he hates me (now)?
      ", "Thirukkural"),
      __("1246.
      My heart, false is the fire that burns; thou canst not wrath maintain,
      If thou thy love behold, embracing, soothing all thy pain.
      <br><b>Exp:</b> O my soul! when you see the dear one who remove dislike by intercourse, you are displeased and
      continue to be so. Nay, your displeasure is (simply) false.
      ", "Thirukkural"),
      __("1247.
      Or bid thy love, or bid thy shame depart;
      For me, I cannot bear them both, my worthy heart!
      <br><b>Exp:</b> O my good soul, give up either lust or honour, as for me I can endure neither.
      ", "Thirukkural"),
      __("1248.
      Thou art befooled, my heart, thou followest him who flees from thee;
      And still thou yearning criest: 'He will nor pity show nor love to me.'
      <br><b>Exp:</b> You are a fool, O my soul! to go after my departed one, while you mourn that he is not kind enough to favour you.
      ", "Thirukkural"),
      __("1249.
      My heart! my lover lives within my mind;
      Roaming, whom dost thou think to find?
      <br><b>Exp:</b> O my soul! to whom would you repair, while the dear one is within yourself?
      ", "Thirukkural"),
      __("1250.
      If I should keep in mind the man who utterly renounces me,
      My soul must suffer further loss of dignity.
      <br><b>Exp:</b> If I retain in my heart him who has left me without befriending me, I shall lose even the (inward) beauty that remains.
      ", "Thirukkural"),

      // 3.2.11. Reserve Overcome

      __("1251.
      Of womanly reserve love's axe breaks through the door,
      Barred by the bolt of shame before.
      <br><b>Exp:</b> The axe of lust can break the door of chastity which is bolted with the bolt of modesty.
      ", "Thirukkural"),
      __("1252.
      What men call love is the one thing of merciless power;
      It gives my soul no rest, e'en in the midnight hour.
      <br><b>Exp:</b> Even at midnight is my mind worried by lust, and this one thing, alas! is without mercy.
      ", "Thirukkural"),
      __("1253.
      I would my love conceal, but like a sneeze
      It shows itself, and gives no warning sign.
      <br><b>Exp:</b> I would conceal my lust, but alas, it yields not to my will but breaks out like a sneeze.
      ", "Thirukkural"),
      __("1254.
      In womanly reserve I deemed myself beyond assail;
      But love will come abroad, and casts away the veil.
      <br><b>Exp:</b> I say I would be firm, but alas, my malady breaks out from its concealment and appears in public.
      ", "Thirukkural"),
      __("1255.
      The dignity that seeks not him who acts as foe,
      Is the one thing that loving heart can never know.
      <br><b>Exp:</b> The dignity that would not go after an absent lover is not known to those who are sticken by love.
      ", "Thirukkural"),
      __("1256.
      My grief how full of grace, I pray you see!
      It seeks to follow him that hateth me.
      <br><b>Exp:</b> The sorrow I have endured by desiring to go after my absent lover, in what way is it excellent?
      ", "Thirukkural"),
      __("1257.
      No sense of shame my gladdened mind shall prove,
      When he returns my longing heart to bless with love.
      <br><b>Exp:</b> I know nothing like shame when my beloved does from love (just) what is desired (by me).
      ", "Thirukkural"),
      __("1258.
      The words of that deceiver, versed in every wily art,
      Are instruments that break through every guard of woman's heart!
      <br><b>Exp:</b> Are not the enticing words of my trick-abounding roguish lover the weapon that breaks away my
      feminine firmness?
      ", "Thirukkural"),
      __("1259.
      'I 'll shun his greeting'; saying thus with pride away I went:
      I held him in my arms, for straight I felt my heart relent.
      <br><b>Exp:</b> I said I would feign dislike and so went (away); (but) I embraced him the moment I say my mind
      began to unite with him!
      ", "Thirukkural"),
      __("1260.
      'We 'll stand aloof and then embrace': is this for them to say,
      Whose hearts are as the fat that in the blaze dissolves away?
      <br><b>Exp:</b> Is it possible for those whose hearts melt like fat in the fire to say they can feign a strong dislike and remain so?
      ", "Thirukkural"),

      // 3.2.12. Mutual Desire

      __("1261.
      My eyes have lost their brightness, sight is dimmed; my fingers worn,
      With nothing on the wall the days since I was left forlorn.
      <br><b>Exp:</b> My finger has worn away by marking (on the wall) the days he has been absent while my eyes have
      lost their lustre and begin to fail.
      ", "Thirukkural"),
      __("1262.
      O thou with gleaming jewels decked, could I forget for this one day,
      Henceforth these bracelets from my arms will slip, my beauty worn away.
      <br><b>Exp:</b> O you bright-jewelled maid, if I forget (him) today, my shoulders will lose their beauty even in the other life and make my bracelets loose.
      ", "Thirukkural"),
      __("1263.
      On victory intent, His mind sole company he went;
      And I yet life sustain! And long to see his face again!
      <br><b>Exp:</b> I still live by longing for the arrival of him who has gone out of love for victory and with valour as his guide.
      ", "Thirukkural"),
      __("1264.
      'He comes again, who left my side, and I shall taste love's joy,'-
      My heart with rapture swells, when thoughts like these my mind employ.
      <br><b>Exp:</b> My heart is rid of its sorrow and swells with rapture to think of my absent lover returning with his love.
      ", "Thirukkural"),
      __("1265.
      O let me see my spouse again and sate these longing eyes!
      That instant from my wasted frame all pallor flies.
      <br><b>Exp:</b> May I look on my lover till I am satisfied and thereafter will vanish the sallowness of my slender shoulders.
      ", "Thirukkural"),
      __("1266.
      O let my spouse but come again to me one day!
      I'll drink that nectar: wasting grief shall flee away.
      <br><b>Exp:</b> May my husband return some day; and then will I enjoy (him) so as to destroy all this agonizing
      sorrow.
      ", "Thirukkural"),
      __("1267.
      Shall I draw back, or yield myself, or shall both mingled be,
      When he returns, my spouse, dear as these eyes to me.
      <br><b>Exp:</b> On the return of him who is as dear as my eyes, am I displeased or am I to embrace (him); or am I to do both?
      ", "Thirukkural"),
      __("1268.
      O would my king would fight, o'ercome, devide the spoil;
      At home, to-night, the banquet spread should crown the toil.
      <br><b>Exp:</b> Let the king fight and gain (victories); (but) let me be united to my wife and feast the evening.
      ", "Thirukkural"),
      __("1269.
      One day will seem like seven to those who watch and yearn
      For that glad day when wanderers from afar return.
      <br><b>Exp:</b> To those who suffer waiting for the day of return of their distant lovers one day is as long as seven days.
      ", "Thirukkural"),
      __("1270.
      What's my return, the meeting hour, the wished-for greeting worth,
      If she heart-broken lie, with all her life poured forth?
      <br><b>Exp:</b> After (my wife) has died of a broken heart, what good will there be if she is to receive me, has received me, or has even embraced me?
      ", "Thirukkural"),

      // 3.2.13. The Reading of the Signs

      __("1271.
      Thou hid'st it, yet thine eye, disdaining all restraint,
      Something, I know not, what, would utter of complaint.
      <br><b>Exp:</b> Though you would conceal (your feelings), your painted eyes would not, for, transgressing (their bounds), they tell (me) something.
      ", "Thirukkural"),
      __("1272.
      The simple one whose beauty fills mine eye, whose shoulders curve
      Like bambu stem, hath all a woman's modest sweet reserve.
      <br><b>Exp:</b> Unusually great is the female simplicity of your maid whose beauty fills my eyes and whose
      shoulders resemble the bamboo.
      ", "Thirukkural"),
      __("1273.
      As through the crystal beads is seen the thread on which they 're strung
      So in her beauty gleams some thought cannot find a tongue.
      <br><b>Exp:</b> There is something that is implied in the beauty of this woman, like the thread that is visible in a garland of gems.
      ", "Thirukkural"),
      __("1274.
      As fragrance in the opening bud, some secret lies
      Concealed in budding smile of this dear damsel's eyes.
      <br><b>Exp:</b> There is something in the unmatured smile of this maid like the fragrance that is contained in an unblossomed bud.
      ", "Thirukkural"),
      __("1275.
      The secret wiles of her with thronging armlets decked,
      Are medicines by which my raising grief is checked.
      <br><b>Exp:</b> The well-meant departure of her whose bangles are tight-fitting contains a remedy that can cure my great sorrow.
      ", "Thirukkural"),
      __("1276.
      While lovingly embracing me, his heart is only grieved:
      It makes me think that I again shall live of love bereaved.
      <br><b>Exp:</b> The embrace that fills me with comfort and gladness is capable of enduring (my former) sorrow and meditating on his want of love.
      ", "Thirukkural"),
      __("1277.
      My severance from the lord of this cool shore,
      My very armlets told me long before.
      <br><b>Exp:</b> My bracelets have understood before me the (mental) separation of him who rules the cool seashore.
      ", "Thirukkural"),
      __("1278.
      My loved one left me, was it yesterday?
      Days seven my pallid body wastes away!
      <br><b>Exp:</b> It was but yesterday my lover departed (from me); and it is seven days since my complexion turned
      sallow.
      ", "Thirukkural"),
      __("1279.
      She viewed her tender arms, she viewed the armlets from them slid;
      She viewed her feet: all this the lady did.
      <br><b>Exp:</b> She looked at her bracelets, her tender shoulders, and her feet; this was what she did there
      (significantly).
      ", "Thirukkural"),
      __("1280.
      To show by eye the pain of love, and for relief to pray,
      Is womanhood's most womanly device, men say.
      <br><b>Exp:</b> To express their love-sickness by their eyes and resort to begging bespeaks more than ordinary
      female excellence.
      ", "Thirukkural"),

      // 3.2.14. Desire for Reunion

      __("1281.
      Gladness at the thought, rejoicing at the sight,
      Not palm-tree wine, but love, yields such delight.
      <br><b>Exp:</b> To please by thought and cheer by sight is peculiar, not to liquor but lust.
      ", "Thirukkural"),
      __("1282.
      When as palmyra tall, fulness of perfect love we gain,
      Distrust can find no place small as the millet grain.
      <br><b>Exp:</b> If women have a lust that exceeds even the measure of the palmyra fruit, they will not desire (to feign) dislike even as much as the millet.
      ", "Thirukkural"),
      __("1283.
      Although his will his only law, he lightly value me,
      My heart knows no repose unless my lord I see.
      <br><b>Exp:</b> Though my eyes disregard me and do what is pleasing to my husband, still will they not be satisfied unless they see him.
      ", "Thirukkural"),
      __("1284.
      My friend, I went prepared to show a cool disdain;
      My heart, forgetting all, could not its love restrain.
      <br><b>Exp:</b> O my friend! I was prepared to feign displeasure but my mind forgetting it was ready to embrace him.
      ", "Thirukkural"),
      __("1285.
      The eye sees not the rod that paints it; nor can I
      See any fault, when I behold my husband nigh.
      <br><b>Exp:</b> Like the eyes which see not the pencil that paints it, I cannot see my husband's fault (just) when I meet him.
      ", "Thirukkural"),
      __("1286.
      When him I see, to all his faults I 'm blind;
      But when I see him not, nothing but faults I find.
      <br><b>Exp:</b> When I see my husband, I do not see any faults; but when I do not see him, I do not see anything but faults.
      ", "Thirukkural"),
      __("1287.
      As those of rescue sure, who plunge into the stream,
      So did I anger feign, though it must falsehood seem?
      <br><b>Exp:</b> Like those who leap into a stream which they know will carry them off, why should a wife feign
      dislike which she knows cannot hold out long?
      ", "Thirukkural"),
      __("1288.
      Though shameful ill it works, dear is the palm-tree wine
      To drunkards; traitor, so to me that breast of thine!
      <br><b>Exp:</b> O you rogue! your breast is to me what liquor is to those who rejoice in it, though it only gives them an unpleasant disgrace.
      ", "Thirukkural"),
      __("1289.
      Love is tender as an opening flower. In season due
      To gain its perfect bliss is rapture known to few.
      <br><b>Exp:</b> Sexual delight is more delicate than a flower, and few are those who understand its real nature.
      ", "Thirukkural"),
      __("1290.
      Her eye, as I drew nigh one day, with anger shone:
      By love o'erpowered, her tenderness surpassed my own.
      <br><b>Exp:</b> She once feigned dislike in her eyes, but the warmth of her embrace exceeded my own.
      ", "Thirukkural"),

      // 3.2.15. Expostulation with Oneself

      __("1291.
      You see his heart is his alone
      O heart, why not be all my own?
      <br><b>Exp:</b> O my soul! although you have seen how his soul stands by him, how is it you do not stand by me?
      ", "Thirukkural"),
      __("1292.
      'Tis plain, my heart, that he 's estranged from thee;
      Why go to him as though he were not enemy?
      <br><b>Exp:</b> O my soul! although you have known him who does not love me, still do you go to him, saying \"he will not be displeased.\"
      ", "Thirukkural"),
      __("1293.
      'The ruined have no friends, 'they say; and so, my heart,
      To follow him, at thy desire, from me thou dost depart.
      <br><b>Exp:</b> O my soul! do you follow him at pleasure under the belief that the ruined have no friends?
      ", "Thirukkural"),
      __("1294.
      'See, thou first show offended pride, and then submit,' I bade;
      Henceforth such council who will share with thee my heart?
      <br><b>Exp:</b> O my soul! you would not first seem sulky and then enjoy (him); who then would in future consult you about such things?
      ", "Thirukkural"),
      __("1295.
      I fear I shall not gain, I fear to lose him when I gain;
      And thus my heart endures unceasing pain.
      <br><b>Exp:</b> My soul fears when it is without him; it also fears when it is with him; it is subject to incessant sorrow.
      ", "Thirukkural"),
      __("1296.
      My heart consumes me when I ponder lone,
      And all my lover's cruelty bemoan.
      <br><b>Exp:</b> My mind has been (here) in order to eat me up (as it were) whenever I think of him in my solitude.
      ", "Thirukkural"),
      __("1297.
      Fall'n 'neath the sway of this ignoble foolish heart,
      Which will not him forget, I have forgotten shame.
      <br><b>Exp:</b> I have even forgotten my modesty, having been caught in my foolish mind which is not dignified
      enough to forget him.
      ", "Thirukkural"),
      __("1298.
      If I contemn him, then disgrace awaits me evermore;
      My soul that seeks to live his virtues numbers o'er.
      <br><b>Exp:</b> My soul which clings to life thinks only of his (own) gain in the belief that it would be disgraceful for it to despise him.
      ", "Thirukkural"),
      __("1299.
      And who will aid me in my hour of grief,
      If my own heart comes not to my relief?
      <br><b>Exp:</b> Who would help me out of one's distress, when one's own soul refuses help to one?
      ", "Thirukkural"),
      __("1300.
      A trifle is unfriendliness by aliens shown,
      When our own heart itself is not our own!
      <br><b>Exp:</b> It is hardly possible for strangers to behave like relations, when one's own soul acts like a stranger.
      ", "Thirukkural"),

      // 3.2.16. Pouting

      __("1301.
      Be still reserved, decline his profferred love;
      A little while his sore distress we 'll prove.
      <br><b>Exp:</b> Let us witness awhile his keen suffering; just feign dislike and embrace him not.
      ", "Thirukkural"),
      __("1302.
      A cool reserve is like the salt that seasons well the mess,
      Too long maintained, 'tis like the salt's excess.
      <br><b>Exp:</b> A little dislike is like salt in proportion; to prolong it a little is like salt a little too much.
      ", "Thirukkural"),
      __("1303.
      'Tis heaping griefs on those whose hearts are grieved;
      To leave the grieving one without a fond embrace.
      <br><b>Exp:</b> For men not to embrace those who have feigned dislike is like torturing those already in agony.
      ", "Thirukkural"),
      __("1304.
      To use no kind conciliating art when lover grieves,
      Is cutting out the root of tender winding plant that droops.
      <br><b>Exp:</b> Not to reconcile those who have feigned dislike is like cutting a faded creeper at its root.
      ", "Thirukkural"),
      __("1305.
      Even to men of good and worthy mind, the petulance
      Of wives with flowery eyes lacks not a lovely grace.
      <br><b>Exp:</b> An increased shyness in those whose eyes are like flowers is beautiful even to good and virtuous husbands.
      ", "Thirukkural"),
      __("1306.
      Love without hatred is ripened fruit;
      Without some lesser strife, fruit immature.
      <br><b>Exp:</b> Sexual pleasure, without prolonged and short-lived dislike, is like too ripe, and unripe fruit.
      ", "Thirukkural"),
      __("1307.
      A lovers' quarrel brings its pain, when mind afraid
      Asks doubtful, 'Will reunion sweet be long delayed?'
      <br><b>Exp:</b> The doubt as to whether intercourse would take place soon or not, creates a sorrow (even) in feigned dislike.
      ", "Thirukkural"),
      __("1308.
      What good can grieving do, when none who love
      Are there to know the grief thy soul endures?
      <br><b>Exp:</b> What avails sorrow when I am without a wife who can understand the cause of my sorrow?
      ", "Thirukkural"),
      __("1309.
      Water is pleasant in the cooling shade;
      So coolness for a time with those we love.
      <br><b>Exp:</b> Like water in the shade, dislike is delicious only in those who love.
      ", "Thirukkural"),
      __("1310.
      Of her who leaves me thus in variance languishing,
      To think within my heart with love is fond desire.
      <br><b>Exp:</b> It is nothing but strong desire that makes her mind unite with me who can leave her to her own
      dislike.
      ", "Thirukkural"),

      // 3.2.17. Feigned Anger

      __("1311.
      From thy regard all womankind Enjoys an equal grace;
      O thou of wandering fickle mind, I shrink from thine embrace!
      <br><b>Exp:</b> You are given to prostitution; all those who are born as womankind enjoy you with their eyes in an ordinary way. I will not embrace you.
      ", "Thirukkural"),
      __("1312.
      One day we silent sulked; he sneezed: The reason well I knew;
      He thought that I, to speak well pleased, Would say, 'Long life to you!'
      <br><b>Exp:</b> When I continued to be sulky he sneezed and thought I would (then) wish him a long life.
      ", "Thirukkural"),
      __("1313.
      I wreathed with flowers one day my brow, The angry tempest lowers;
      She cries, 'Pray, for what woman now Do you put on your flowers?'
      <br><b>Exp:</b> Even if I were adorned with a garland of branch-flowers, she would say I did so to show it to another woman.
      ", "Thirukkural"),
      __("1314.
      'I love you more than all beside,' 'T was thus I gently spoke;
      'What all, what all?' she instant cried; And all her anger woke.
      <br><b>Exp:</b> When I said I loved her more than any other woman, she said \"more than others, yes, more than
      others,\" and remained sulky.
      ", "Thirukkural"),
      __("1315.
      'While here I live, I leave you not,' I said to calm her fears.
      She cried, 'There, then, I read your thought'; And straight dissolved in tears.
      <br><b>Exp:</b> When I said I would never part from her in this life her eyes were filled with tears.
      ", "Thirukkural"),
      __("1316.
      'Each day I called to mind your charms,' 'O, then, you had forgot,'
      She cried, and then her opened arms, Forthwith embraced me not.
      <br><b>Exp:</b> When I said I had remembered her, she said I had forgotten her and relaxing her embrace, began to feign dislike.
      ", "Thirukkural"),
      __("1317.
      She hailed me when I sneezed one day; But straight with anger seized,
      She cried; 'Who was the woman, pray, Thinking of whom you sneezed?'
      <br><b>Exp:</b> When I sneezed she blessed me, but at once changed (her mind) and wept, asking, \"At the thought of whom did you sneeze?\"
      ", "Thirukkural"),
      __("1318.
      And so next time I checked my sneeze; She forthwith wept and cried,
      (That woman difficult to please), 'Your thoughts from me you hide'.
      <br><b>Exp:</b> When I suppressed my sneezing, she wept saying, \"I suppose you (did so) to hide from me your own people's remembrance of you\".
      ", "Thirukkural"),
      __("1319.
      I then began to soothe and coax, To calm her jealous mind;
      'I see', quoth she, 'to other folks How you are wondrous kind'
      <br><b>Exp:</b> Even when I try to remove her dislike, she is displeased and says, \"This is the way you behave
      towards (other women).\"
      ", "Thirukkural"),
      __("1320.
      I silent sat, but thought the more, And gazed on her. Then she
      Cried out, 'While thus you eye me o'er, Tell me whose form you see'.
      <br><b>Exp:</b> Even when I look on her contemplating (her beauty), she is displeased and says, \"With whose thought have you (thus) looked on my person?\"
      ", "Thirukkural"),

      // 3.2.18. The Pleasures of 'Temporary Variance

      __("1321.
      Although there be no fault in him, the sweetness of his love
      Hath power in me a fretful jealousy to move.
      <br><b>Exp:</b> Although my husband is free from defects, the way in which he embraces me is such as to make me
      feign dislike.
      ", "Thirukkural"),
      __("1322.
      My 'anger feigned' gives but a little pain;
      And when affection droops, it makes it bloom again.
      <br><b>Exp:</b> His love will increase though it may (at first seem to) fade through the short-lived distress caused by (my) dislike.
      ", "Thirukkural"),
      __("1323.
      Is there a bliss in any world more utterly divine,
      Than 'coyness' gives, when hearts as earth and water join?
      <br><b>Exp:</b> Is there a celestial land that can please like the feigned dislike of those whose union resembles that of earth and water?
      ", "Thirukkural"),
      __("1324.
      'Within the anger feigned' that close love's tie doth bind,
      A weapon lurks, which quite breaks down my mind.
      <br><b>Exp:</b> In prolonged dislike after an embrace there is a weapon that can break my heart.
      ", "Thirukkural"),
      __("1325.
      Though free from fault, from loved one's tender arms
      To be estranged a while hath its own special charms.
      <br><b>Exp:</b> Though free from defects, men feel pleased when they cannot embrace the delicate shoulders of
      those whom they love.
      ", "Thirukkural"),
      __("1326.
      'Tis sweeter to digest your food than 'tis to eat;
      In love, than union's self is anger feigned more sweet.
      <br><b>Exp:</b> To digest what has been eaten is more delightful than to eat more; likewise love is more delightful in dislike than intercourse.
      ", "Thirukkural"),
      __("1327.
      In lovers' quarrels, 'tis the one that first gives way,
      That in re-union's joy is seen to win the day.
      <br><b>Exp:</b> Those are conquerors whose dislike has been defeated and that is proved by the love (which
      follows).
      ", "Thirukkural"),
      __("1328.
      And shall we ever more the sweetness know of that embrace
      With dewy brow; to which 'feigned anger' lent its piquant grace.
      <br><b>Exp:</b> Will I enjoy once more through her dislike, the pleasure of that love that makes her forehead
      perspire?
      ", "Thirukkural"),
      __("1329.
      Let her, whose jewels brightly shine, aversion feign!
      That I may still plead on, O night, prolong thy reign!
      <br><b>Exp:</b> May the bright-jewelled one feign dislike, and may the night be prolonged for me to implore her!
      ", "Thirukkural"),
      __("1330.
      A 'feigned aversion' coy to pleasure gives a zest;
      The pleasure's crowned when breast is clasped to breast.
      <br><b>Exp:</b> Dislike adds delight to love; and a hearty embrace (thereafter) will add delight to dislike.
      End of tirukkuRaL English Translation and Commentary.", "Thirukkural"),
    );

    return $ThirukkuralQuotes[$index];
}

// returns random quote
function Thirukkural_random() {
    return get_Thirukkural(rand(0, 1330));
}

add_shortcode('Thirukkural', 'Thirukkural_random');

/**
 * Adds Quote by Thirukkural widget.
 */
class Thirukkural_RandomWidget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct('Thirukkural_RandomWidget', __('Daily Quotes Kural', 'Thirukkural'), array('description' => __('Displays random Thirukkural on your website', 'Thirukkural')));
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $obj Previously saved values from database.
     */
    public function form($obj) {
        $obj = wp_parse_args((array) $obj, array('title' => 'Thirukkural'));
        $title = $obj['title'];
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $obj = $old_instance;
        $obj['title'] = $new_instance['title'];

        return $obj;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $obj Saved values from database.
     */
    public function widget($args, $obj) {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $title = empty($obj['title']) ? ' ' : apply_filters('widget_title', $obj['title']);

        if (!empty($title))
            echo $before_title . $title . $after_title;;

        echo "<div class=\"Thirukkural quote\"><i>" . Thirukkural_random() . "</i></div>";

        echo $after_widget;
    }

} // class Thirukkural_RandomWidget

//  register socrates quote widget
function register_widget_Thirukkural_widget() {
    return register_widget('Thirukkural_RandomWidget');
}

add_action('widgets_init', 'register_widget_Thirukkural_widget');
