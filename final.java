final class A 
{
int x;
A(int x)
    {
	this.x=x;
	}
	final void display()
	{
	System.out.println("X="+x)
	}
	}
	
	
	class joker extends batman
	{
	int y;
	joker(int x, int y)
	{
	super(x);
	this.y=y;
	}
	void display()
	{
	System.out.println("X="+x+"Y="+y);
	}
}


class terenaam
{
public static void main(String args[])
	{
	joker.obj = new B(5,7)
	obj.display();
	}
}