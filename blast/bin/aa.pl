open(TY,"seqtr.fas");
@dd=<TY>;
open(TK,">swiseq.fas");
for($i=0;$i<scalar(@dd);$i++)
{

if($dd[$i]=~/^>/)
{

print $dd[$i];
@cc=split(/\]/,$dd[$i]);
$new=$cc[0]."]\n".$cc[1];
print TK $new;

}
}
