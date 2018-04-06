<?php
namespace Drupal\term_fix\Controller;

use Drupal\Core\Controller\ControllerBase;

/*
 - Add a term to an it_effort (fail if it's already there)
 - Substitute term_old with term_new
  - Find all nodes tagged with term_old
    - For each node, add term_new
  - Delete term_old
*/

/**
 * An example controller.
 */
class TermFixController extends ControllerBase {

#$result = term_fix_delete_term(360);

  /**
   * {@inheritdoc}
   */
  public function delete() {
    $this->delete_term(360);
    $build = [
      '#markup' => t('Hello World!'),
    ];
    return $build;
  }


  /**
   * {@inheritdoc}
   */
  public function show() {

    $this->replace_terms(441, 341);
$this->replace_terms(323, 323);
$this->replace_terms(472, 472);
$this->replace_terms(338, 472);
$this->replace_terms(574, 574);
$this->replace_terms(428, 574);
$this->replace_terms(519, 493);
$this->replace_terms(493, 493);
$this->replace_terms(349, 493);
$this->replace_terms(352, 493);
$this->replace_terms(461, 461);
$this->replace_terms(460, 461);
$this->replace_terms(466, 364);
$this->replace_terms(364, 364);
$this->replace_terms(322, 364);
$this->replace_terms(468, 364);
$this->replace_terms(398, 398);
$this->replace_terms(389, 297);
$this->replace_terms(297, 297);
$this->replace_terms(357, 297);
$this->replace_terms(298, 297);
$this->replace_terms(321, 321);
$this->replace_terms(299, 299);
$this->replace_terms(588, 299);
$this->replace_terms(300, 299);
$this->replace_terms(397, 397);
$this->replace_terms(455, 455);
$this->replace_terms(415, 455);
$this->replace_terms(414, 455);
$this->replace_terms(537, 537);
$this->replace_terms(594, 594);
$this->replace_terms(595, 594);
$this->replace_terms(408, 408);
$this->replace_terms(510, 408);
$this->replace_terms(606, 375);
$this->replace_terms(598, 375);
$this->replace_terms(375, 375);
$this->replace_terms(499, 375);
$this->replace_terms(586, 375);
$this->replace_terms(376, 375);
$this->replace_terms(348, 348);
$this->replace_terms(351, 348);
$this->replace_terms(374, 348);
$this->replace_terms(393, 393);
$this->replace_terms(347, 347);
$this->replace_terms(465, 465);
$this->replace_terms(500, 500);
$this->replace_terms(431, 431);
$this->replace_terms(385, 385);
$this->replace_terms(301, 301);
$this->replace_terms(456, 456);
$this->replace_terms(369, 369);
$this->replace_terms(590, 590);
$this->replace_terms(538, 538);
$this->replace_terms(379, 294);
$this->replace_terms(329, 329);
$this->replace_terms(611, 611);
$this->replace_terms(361, 611);
$this->replace_terms(362, 611);
$this->replace_terms(380, 611);
$this->replace_terms(613, 611);
$this->replace_terms(407, 399);
$this->replace_terms(399, 399);
$this->replace_terms(453, 451);
$this->replace_terms(451, 451);
$this->replace_terms(309, 309);
$this->replace_terms(571, 571);
$this->replace_terms(295, 394);
$this->replace_terms(394, 394);
$this->replace_terms(317, 394);
$this->replace_terms(410, 410);
$this->replace_terms(473, 410);
$this->replace_terms(467, 467);
$this->replace_terms(435, 435);
$this->replace_terms(503, 562);
$this->replace_terms(546, 562);
$this->replace_terms(562, 562);
$this->replace_terms(541, 541);
$this->replace_terms(547, 547);
$this->replace_terms(449, 449);
$this->replace_terms(377, 372);
$this->replace_terms(353, 372);
$this->replace_terms(378, 372);
$this->replace_terms(372, 372);
$this->replace_terms(448, 372);
$this->replace_terms(409, 409);
$this->replace_terms(444, 444);
$this->replace_terms(531, 350);
$this->replace_terms(527, 350);
$this->replace_terms(433, 350);
$this->replace_terms(350, 350);
$this->replace_terms(518, 350);
$this->replace_terms(545, 330);
$this->replace_terms(330, 330);
$this->replace_terms(366, 366);
$this->replace_terms(401, 366);
$this->replace_terms(400, 400);
$this->replace_terms(292, 292);
$this->replace_terms(391, 391);
$this->replace_terms(96, 96);
$this->replace_terms(450, 303);
$this->replace_terms(303, 303);
$this->replace_terms(560, 303);
$this->replace_terms(532, 303);
$this->replace_terms(111, 111);
$this->replace_terms(156, 156);
$this->replace_terms(286, 286);
$this->replace_terms(592, 86);
$this->replace_terms(86, 86);
$this->replace_terms(565, 121);
$this->replace_terms(121, 121);
$this->replace_terms(141, 141);
$this->replace_terms(564, 141);
$this->replace_terms(304, 304);
$this->replace_terms(582, 305);
$this->replace_terms(549, 305);
$this->replace_terms(305, 305);
$this->replace_terms(416, 305);
$this->replace_terms(221, 221);
$this->replace_terms(577, 221);
$this->replace_terms(559, 221);
$this->replace_terms(439, 221);
$this->replace_terms(226, 226);
$this->replace_terms(426, 226);
$this->replace_terms(186, 186);
$this->replace_terms(101, 101);
$this->replace_terms(106, 106);
$this->replace_terms(81, 81);
$this->replace_terms(544, 81);
$this->replace_terms(548, 81);
$this->replace_terms(458, 307);
$this->replace_terms(307, 307);
$this->replace_terms(343, 307);
$this->replace_terms(459, 307);
$this->replace_terms(342, 307);
$this->replace_terms(196, 196);
$this->replace_terms(491, 196);
$this->replace_terms(561, 196);
$this->replace_terms(501, 196);
$this->replace_terms(306, 306);
$this->replace_terms(201, 201);
$this->replace_terms(360, 360);
$this->replace_terms(211, 211);
$this->replace_terms(76, 76);
$this->replace_terms(609, 76);
$this->replace_terms(161, 161);
$this->replace_terms(576, 161);
$this->replace_terms(341, 0);
$this->replace_terms(593, 0);
$this->replace_terms(438, 0);
$this->replace_terms(490, 0);
$this->replace_terms(624, 0);
$this->replace_terms(505, 0);
$this->replace_terms(396, 0);
$this->replace_terms(423, 0);
$this->replace_terms(587, 0);
$this->replace_terms(316, 0);
$this->replace_terms(540, 0);
$this->replace_terms(570, 0);
$this->replace_terms(411, 0);
$this->replace_terms(614, 0);
$this->replace_terms(365, 0);
$this->replace_terms(530, 0);
$this->replace_terms(445, 0);
$this->replace_terms(446, 0);
$this->replace_terms(443, 0);
$this->replace_terms(506, 0);
$this->replace_terms(481, 0);
$this->replace_terms(333, 0);
$this->replace_terms(293, 0);
$this->replace_terms(479, 0);
$this->replace_terms(484, 0);
$this->replace_terms(555, 0);
$this->replace_terms(601, 0);
$this->replace_terms(384, 0);
$this->replace_terms(429, 0);
$this->replace_terms(525, 0);
$this->replace_terms(514, 0);
$this->replace_terms(520, 0);
$this->replace_terms(404, 0);
$this->replace_terms(619, 0);
$this->replace_terms(615, 0);
$this->replace_terms(412, 0);
$this->replace_terms(599, 0);
$this->replace_terms(373, 0);
$this->replace_terms(498, 0);
$this->replace_terms(573, 0);
$this->replace_terms(346, 0);
$this->replace_terms(591, 0);
$this->replace_terms(326, 0);
$this->replace_terms(368, 0);
$this->replace_terms(470, 0);
$this->replace_terms(568, 0);
$this->replace_terms(336, 0);
$this->replace_terms(524, 0);
$this->replace_terms(551, 0);
$this->replace_terms(437, 0);
$this->replace_terms(517, 0);
$this->replace_terms(430, 0);
$this->replace_terms(585, 0);
$this->replace_terms(584, 0);
$this->replace_terms(417, 0);
$this->replace_terms(419, 0);
$this->replace_terms(476, 0);
$this->replace_terms(371, 0);
$this->replace_terms(327, 0);
$this->replace_terms(539, 0);
$this->replace_terms(335, 0);
$this->replace_terms(521, 0);
$this->replace_terms(367, 0);
$this->replace_terms(572, 0);
$this->replace_terms(528, 0);
$this->replace_terms(471, 0);
$this->replace_terms(320, 0);
$this->replace_terms(457, 0);
$this->replace_terms(536, 0);
$this->replace_terms(623, 0);
$this->replace_terms(578, 0);
$this->replace_terms(523, 0);
$this->replace_terms(318, 0);
$this->replace_terms(474, 0);
$this->replace_terms(515, 0);
$this->replace_terms(602, 0);
$this->replace_terms(489, 0);
$this->replace_terms(388, 0);
$this->replace_terms(387, 0);
$this->replace_terms(612, 0);
$this->replace_terms(359, 0);
$this->replace_terms(334, 0);
$this->replace_terms(522, 0);
$this->replace_terms(436, 0);
$this->replace_terms(533, 0);
$this->replace_terms(452, 0);
$this->replace_terms(509, 0);
$this->replace_terms(621, 0);
$this->replace_terms(313, 0);
$this->replace_terms(516, 0);
$this->replace_terms(575, 0);
$this->replace_terms(507, 0);
$this->replace_terms(478, 0);
$this->replace_terms(477, 0);
$this->replace_terms(392, 0);
$this->replace_terms(513, 0);
$this->replace_terms(580, 0);
$this->replace_terms(556, 0);
$this->replace_terms(607, 0);
$this->replace_terms(552, 0);
$this->replace_terms(492, 0);
$this->replace_terms(390, 0);
$this->replace_terms(311, 0);
$this->replace_terms(420, 0);
$this->replace_terms(432, 0);
$this->replace_terms(512, 0);
$this->replace_terms(442, 0);
$this->replace_terms(617, 0);
$this->replace_terms(567, 0);
$this->replace_terms(381, 0);
$this->replace_terms(382, 0);
$this->replace_terms(550, 0);
$this->replace_terms(487, 0);
$this->replace_terms(622, 0);
$this->replace_terms(488, 0);
$this->replace_terms(383, 0);
$this->replace_terms(354, 0);
$this->replace_terms(480, 0);
$this->replace_terms(422, 0);
$this->replace_terms(475, 0);
$this->replace_terms(482, 0);
$this->replace_terms(355, 0);
$this->replace_terms(554, 0);
$this->replace_terms(314, 0);
$this->replace_terms(563, 0);
$this->replace_terms(319, 0);
$this->replace_terms(579, 0);
$this->replace_terms(542, 0);
$this->replace_terms(332, 0);
$this->replace_terms(462, 0);
$this->replace_terms(603, 0);
$this->replace_terms(543, 0);
$this->replace_terms(597, 0);
$this->replace_terms(566, 0);
$this->replace_terms(553, 0);
$this->replace_terms(413, 0);
$this->replace_terms(497, 0);
$this->replace_terms(356, 0);
$this->replace_terms(325, 0);
$this->replace_terms(483, 0);
$this->replace_terms(315, 0);
$this->replace_terms(618, 0);
$this->replace_terms(485, 0);
$this->replace_terms(370, 0);
$this->replace_terms(402, 0);
$this->replace_terms(596, 0);
$this->replace_terms(535, 0);
$this->replace_terms(494, 0);
$this->replace_terms(403, 0);
$this->replace_terms(583, 0);
$this->replace_terms(589, 0);
$this->replace_terms(386, 0);
$this->replace_terms(454, 0);
$this->replace_terms(345, 0);
$this->replace_terms(496, 0);
$this->replace_terms(526, 0);
$this->replace_terms(486, 0);
$this->replace_terms(469, 0);
$this->replace_terms(302, 0);
$this->replace_terms(600, 0);
$this->replace_terms(308, 0);
$this->replace_terms(440, 0);
$this->replace_terms(328, 0);
$this->replace_terms(616, 0);
$this->replace_terms(418, 0);
$this->replace_terms(405, 0);
$this->replace_terms(358, 0);
$this->replace_terms(427, 0);
$this->replace_terms(557, 0);
$this->replace_terms(508, 0);
$this->replace_terms(581, 0);
$this->replace_terms(504, 0);
$this->replace_terms(331, 0);
$this->replace_terms(529, 0);
$this->replace_terms(464, 0);
$this->replace_terms(569, 0);
$this->replace_terms(425, 0);
$this->replace_terms(605, 0);
$this->replace_terms(447, 0);
$this->replace_terms(421, 0);
$this->replace_terms(312, 0);
$this->replace_terms(344, 0);
$this->replace_terms(495, 0);
$this->replace_terms(339, 0);
$this->replace_terms(340, 0);
$this->replace_terms(463, 0);
$this->replace_terms(395, 0);
$this->replace_terms(434, 0);
$this->replace_terms(310, 0);
$this->replace_terms(324, 0);
$this->replace_terms(511, 0);
$this->replace_terms(620, 0);
$this->replace_terms(363, 0);
$this->replace_terms(136, 136);
$this->replace_terms(71, 71);
$this->replace_terms(608, 91);
$this->replace_terms(558, 91);
$this->replace_terms(91, 91);
$this->replace_terms(604, 91);
$this->replace_terms(281, 281);
$this->replace_terms(181, 181);
$this->replace_terms(502, 206);
$this->replace_terms(206, 206);
$this->replace_terms(294, 206);
$this->replace_terms(231, 231);
$this->replace_terms(126, 126);
$this->replace_terms(216, 216);
$this->replace_terms(424, 216);
$this->replace_terms(610, 216);
$this->replace_terms(151, 151);
$this->replace_terms(296, 296);
$this->replace_terms(534, 296);

    $text = 'done. hopefully.';

    $build = [
      '#markup' => $text,
    ];

    return $build;
  }

  private function get_all_nodes_with_term($tid) {
    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['field_tags' => $tid]);
    return $entities;
  }

  private function replace_terms($old_term_id, $new_term_id) {
    
    if ($new_term_id == 0) {

      // get all the nodes with the term to be deleted
      $nodes = $this->get_all_nodes_with_term($old_term_id);

      // delete the term itself
      $this->delete_term($old_term_id);

      // save all the nodes so the references get purged
      foreach($nodes as $nid => $node) {
        $node->save();
      }
      return;
    }

    // get all the nodes with the old term
    $nodes = $this->get_all_nodes_with_term($old_term_id);

    // get all the nodes with the new term (so we can check and not double add)
    $existing_node_ids = array_keys($this->get_all_nodes_with_term($new_term_id));

    // delete the old term
    $this->delete_term($old_term_id);

    // for each node
    foreach($nodes as $nid => $node) {

      if (in_array($nid, $existing_node_ids)) {
        // just save the node if it already has the new term
        $node->save();
      } else {
        // add the new term if it's not already there
        $this->add_term_to_node($new_term_id, $node);
      }
    }
  }

  private function delete_term($tid) {
    \Drupal::logger('term_fix')->notice("Deleted term with ID: $tid");
    $controller = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
    $entity = $controller->load($tid);
    if ($entity) {
      $controller->delete(array($entity));
    }
  }

  private function add_term_to_node($tid, $node) {
      \Drupal::logger('term_fix')->notice("Added term with ID: $tid to node with ID: " . $node->id());
      $node->get('field_tags')->appendItem(['target_id' => $tid]);
      $node->save();
  }
}

