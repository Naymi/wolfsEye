<?
class Table{
  public function getCell($content, $style)
  {
    return "<td style=\"" . ($style ? $style : '') . "\">$content</td>";
  }
  public function getRow($content, $style)
  {
    return "<tr style=\"".($style ? $style : '')."\">$content</tr>";
  }
  public function getTable($data, $styles)
  {
    $tds = "";
    $trs = "";
    foreach ($data as $item) {
      foreach ($item as $value) {
        $tds .= $this -> getCell($value, $styles['cell']);
      }
      $trstyles = $trstyles ? "" : "background: #f8f8f8;";
      $trs .= $this -> getRow($tds, $trstyles);
      $tds = "";
    }
    return "<table style=\"".$styles['table']."\">$trs</table>";
  }
}