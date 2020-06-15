package java2sqlServer;
import java.sql.*;

public class DBConnect {

	public DBConnect() {
		try {
			
		Class.forName("com.jdbc.sqlserver.jdbc.SQLServerDriver");
		String url = "jdbc:sqlserver://localhost;databaseName=ceis400;user=newuser;password=login";
		//Connection
		//DriverManager
		Connection conn=DriverManager.getConnection(url);
		//Statement
		Statement s = conn.createStatement();
		System.out.println("Connection established successfully");
		
		//ResultSet
		ResultSet rs = s.executeQuery("SELECT * FROM [EquipmentLog]");
		while (rs.next()) {
			System.out.println(rs.getString(1));
		}
		} catch (Exception e) {
			e.printStackTrace();
			System.out.println("Could not connect to database");
		}
	}
	
}
